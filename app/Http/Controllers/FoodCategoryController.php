<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\FoodCategory;
use Illuminate\Http\Request;

class FoodCategoryController extends AdminController
{
    private $foodCategoryModel;
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function __construct()
    {
        parent::__construct();
        $this->foodCategoryModel = new FoodCategory();
    }

    public function index() {
        $foodCategoryModel = new FoodCategory();
        $this->data['categories'] = $foodCategoryModel->get();

        return view('pages.admin.foodCategories.index', $this->data);
    }

    public function create()
    {
        $this->data['pages'] = [
            [
                "name" => "Categories",
                "route"=> "admin.categories.index"
            ],
            [
                "name" => "Add new category"
            ]
        ];

        return view('pages.admin.foodCategories.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
            $this->foodCategoryModel->insert($request->get('name'), $request->has('listed'));

            $this->logAction("Admin created the " . $request->get('name') . " food category.", $request);

            return redirect()->route('admin.categories.index')->with('messages', ["Category " . $request->get('name') . " was created successfully."]);
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
        $this->data['category'] = $this->foodCategoryModel->find($id);
        $this->data['pages'] = [
            [
                "name" => "Categories",
                "route"=> "admin.categories.index"
            ],
            [
                "name" => "Edit category"
            ]
        ];

        return view('pages.admin.foodCategories.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        try {
            $this->foodCategoryModel->myUpdate($id, $request->get('name'), $request->has('listed'));

            $this->logAction("Admin updated the " . $request->get('name') . " food category.", $request);

            return redirect()->route('admin.categories.index')->with('messages', ['Category was changed successfully.']);
        } catch(\Exception $ex) {
            $uniqueId = uniqid();
            \Log::error($uniqueId . " " . $ex->getMessage());
            return redirect()->back()->withErrors(["We encountered an error.", "Error ID: " . $uniqueId]);
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
            $this->foodCategoryModel->myDelete($id);

            $this->logAction("Admin deleted a food category.", request());

            return redirect()->route('admin.categories.index')->with('messages', ["Category was deleted successfully."]);
        } catch(\Exception $ex) {
            return redirect()->back()->withErrors(["We encountered an error."]);
        }
    }
}
