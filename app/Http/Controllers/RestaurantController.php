<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use App\Models\FoodCategory;
use App\Models\ImageUpload;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RestaurantController extends ClientController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $restaurantModel;
    private $foodCategoryModel;

    public function __construct()
    {
        parent::__construct();

        $this->middleware('isLoggedIn', ['except' => ['index', 'getFiltered', 'search']]);
        $this->middleware(['isLoggedIn', 'isAdmin'], ['except' => ['index', 'show', 'filterFood', 'getFiltered', 'search']]);

        $this->restaurantModel = new Restaurant();
        $this->foodCategoryModel = new FoodCategory();

        $this->data['foodCategories'] = $this->foodCategoryModel->get(true);
    }

    public function index()
    {
        $this->data["restaurants"] = $this->restaurantModel->get();

        return view("pages.client.restaurants.index", $this->data);
    }

    public function search(Request $request) {
        try {
            $keyword = $request->get("keyword") == null ? "" : $request->input("keyword");

            $restaurants = $this->restaurantModel->search($keyword);

            return response()->json($restaurants);
        } catch(\Exception $ex) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $ex->getMessage());

            return response("We encountered an error.", 500);
        }
    }

    public function getFiltered(Request $request) {
        try {
            $keyword = $request->get("keyword") == null ? "" : $request->input("keyword");
            $sortOrder = $request->get("sortOrder");
            $categories = $request->get("categories") == null ? [] : $request->input("categories");

            $restaurants = $this->restaurantModel->getFiltered($keyword, $sortOrder, $categories);

            $response = [
                "restaurants" => $restaurants,
                "views" => []
            ];

            foreach($restaurants->items() as $r) {
                $response['views'][] = \View::make("components.client.restaurant", [
                    "id" => $r->id,
                    "name" => $r->name,
                    "image" => $r->image,
                    "categories" => $r->topCategories,
                    "lg" => 6,
                    "md" => 6
                ])->render();
            }

            return response()->json($response);
        } catch(\Exception $ex) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $ex->getMessage());

            return response("We encountered an error.", 500);
        }
    }

    public function filterFood(Request $request) {
        try {
            $id = $request->get("id");
            $keyword = $request->get("keyword") == null ? "" : $request->input("keyword");
            $sortOrder = $request->get("sortOrder");
            $categories = $request->get("categories") == null ? [] : $request->input("categories");

            $food = $this->restaurantModel->filterFood($id, $keyword, $sortOrder, $categories);

            $response = [
                "food" => $food,
                "views" => []
            ];

            foreach($food->items() as $f) {
                $response['views'][] = \View::make("components.client.food", [
                    "id" => $f->id,
                    "name" => $f->name,
                    "image" => $f->image,
                    "price" => $f->price,
                    "md" => 6,
                    "lg" => 6
                ])->render();
            }

            return response()->json($response);
        } catch(\Exception $ex) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $ex->getMessage());

            return response("We encountered an error.", 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->data['nav'] = $this->navModel->getAdminNav();
        $this->data['restaurants'] = $this->restaurantModel->getAll();
        $this->data['pages'] = [
            [
                'name' => 'Restaurants',
                'route' => 'admin.restaurants'
            ],
            [
                'name' => 'Add new restaurant'
            ]
        ];

        return view('pages.admin.restaurants.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRestaurantRequest $request)
    {
        try {
            $imageUploadModel = new ImageUpload();
            $imageName = $imageUploadModel->uploadResized($request, '/assets/images/restaurants/', 405);

            $this->restaurantModel->insert(
                $request->get('name'),
                $imageName,
                $request->has('recommended'),
                $request->has('active')
            );

            $this->logAction("Admin created the " . $request->get('name') . " restaurant.", $request);

            return redirect()->route('admin.restaurants')->with('messages', ['Restaurant ' . $request->get('name') . ' was created successfully.']);
        } catch(\Exception $ex) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $ex->getMessage());
            return redirect()->back()->withErrors(['We encountered an error.', 'Error ID: ' . $uniqueId]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $restaurant = $this->restaurantModel->find($id);
        $this->data['restaurant'] = $restaurant;

        return view("pages.client.restaurants.show", $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $this->data['nav'] = $this->navModel->getAdminNav();
        $this->data['pages'] = [
            [
                'name' => 'Restaurants',
                'route' => 'admin.restaurants'
            ],
            [
                'name' => 'Edit restaurant'
            ]
        ];
        $this->data['restaurant'] = $this->restaurantModel->find($id);

        return view('pages.admin.restaurants.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateRestaurantRequest $request, $id)
    {
        try {
            $imageName = null;

            if($request->has('image')) {
                $imageUploadModel = new ImageUpload();
                $imageName = $imageUploadModel->uploadResized($request, '/assets/images/restaurants/', 405);
            }

            $this->restaurantModel->myUpdate(
                $id,
                $request->get('name'),
                $request->has('recommended'),
                $request->has('active'),
                $imageName
            );

            $this->logAction("Admin updated the " . $request->get('name') . " restaurant.", $request);

            return redirect()->route('admin.restaurants')->with('messages', ['Restaurant was updated successfully.']);
        } catch(\Exception $ex) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $ex->getMessage());
            return redirect()->back()->withErrors(['We encountered an error.', 'Error ID: ' . $uniqueId]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $this->restaurantModel->myDelete($id);

            $this->logAction("Admin deleted a restaurant.", request());

            return redirect()->route('admin.restaurants')->with('messages', ['Restaurant was deleted successfully.']);
        } catch(\Exception $ex) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $ex->getMessage());
            return redirect()->back()->withErrors(['We encountered an error.', 'Error ID: ' . $uniqueId]);
        }
    }
}
