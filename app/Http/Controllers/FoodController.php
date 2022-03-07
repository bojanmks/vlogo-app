<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFoodRequest;
use App\Http\Requests\UpdateFoodRequest;
use App\Models\Food;
use App\Models\FoodCategory;
use App\Models\ImageUpload;
use App\Models\Restaurant;
use Doctrine\DBAL\Driver\Exception;
use Illuminate\Http\Request;

class FoodController extends AdminController
{
    private $foodModel;

    public function __construct() {
        parent::__construct();
        $this->foodModel = new Food();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $this->data['food'] = $this->foodModel->get();

        return view('pages.admin.food.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->data['pages'] = [
            [
                'name' => "Food",
                'route' => 'admin.food.index'
            ],
            [
                'name' => 'Add new food'
            ]
        ];

        $restaurantsModel = new Restaurant();
        $this->data['restaurants'] = $restaurantsModel->getAll();

        $categoriesModel = new FoodCategory();
        $this->data['categories'] = $categoriesModel->get();

        return view('pages.admin.food.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreFoodRequest $request)
    {
        try {
            $imageUploadModel = new ImageUpload();
            $imageName = $imageUploadModel->uploadResized($request, '/assets/images/food/', 150, 150);

            $this->foodModel->insert(
                $request->get('name'),
                $imageName,
                $request->get('restaurant'),
                $request->get('category'),
                round($request->get('price'), 2)
            );

            return redirect()->route('admin.food.index')->with('messages', ['Food ' . $request->get('name') . ' was created successfully.']);
        } catch(\Exception $ex) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $ex->getMessage());
            return redirect()->back()->withErrors(['We encountered an error.', 'Error ID: ' . $uniqueId]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $this->data['pages'] = [
            [
                'name' => "Food",
                'route' => 'admin.food.index'
            ],
            [
                'name' => 'Edit food'
            ]
        ];
        $this->data['food'] = $this->foodModel->find($id);

        $restaurantsModel = new Restaurant();
        $this->data['restaurants'] = $restaurantsModel->getAll();

        $categoriesModel = new FoodCategory();
        $this->data['categories'] = $categoriesModel->get();

        return view('pages.admin.food.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateFoodRequest $request, $id)
    {
        try {
            $imageName = null;

            if($request->has('image') && $request->file('image')) {
                $imageUploadModel = new ImageUpload();
                $imageName = $imageUploadModel->uploadResized($request, '/assets/images/food/', 150, 150);
            }

            $this->foodModel->myUpdate(
                $id,
                $request->get('name'),
                $request->get('restaurant'),
                $request->get('category'),
                round($request->get('price'), 2),
                $imageName
            );

            return redirect()->route('admin.food.index')->with('messages', ['Food was updated successfully.']);
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
            $this->foodModel->myDelete($id);

            return redirect()->route('admin.food.index')->with('messages', ['Food was deleted successfully.']);
        } catch(\Exception $ex) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $ex->getMessage());
            return redirect()->back()->withErrors(['We encountered an error.', 'Error ID: ' . $uniqueId]);
        }
    }
}
