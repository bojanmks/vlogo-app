<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class HomeController extends ClientController
{
    private $restaurantModel;

    public function __construct()
    {
        parent::__construct();
        $this->restaurantModel = new Restaurant();
        $this->data["recommendedRestaurants"] = $this->restaurantModel->get(true);
    }

    public function index() {
        return view("pages.client.home", $this->data);
    }
}
