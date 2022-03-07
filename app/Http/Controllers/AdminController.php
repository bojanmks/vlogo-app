<?php

namespace App\Http\Controllers;

use App\Models\AccessLog;
use App\Models\ActionLog;
use App\Models\Food;
use App\Models\FoodCategory;
use App\Models\Nav;
use App\Models\Order;
use App\Models\Restaurant;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends MyController
{
    private $navModel;

    public function __construct()
    {
        parent::__construct();
        $this->navModel = new Nav();
        $this->data['nav'] = $this->navModel->getAdminNav();
    }

    public function index() {
        $orderModel = new Order();
        $accessLogModel = new AccessLog();

        $this->data['infoBoxes'] = [
            [
                "value" => $orderModel->getCount(),
                "text" => "Total orders",
                "colorClass" => "bg-info",
                "icon" => "fas fa-shopping-cart"
            ],
            [
                "value" => "$" . round($orderModel->getTotalEarnings(), 2),
                "text" => "Total earnings",
                "colorClass" => "bg-success",
                "icon" => "fas fa-bar-chart"
            ],
            [
                "value" => $this->actionLogModel->getRegistrationsCount(),
                "text" => "User registrations",
                "colorClass" => "bg-warning",
                "icon" => "fas fa-user-plus"
            ],
            [
                "value" => $accessLogModel->getUniqueVisitors(),
                "text" => "Unique visitors (7 days)",
                "colorClass" => "bg-danger",
                "icon" => "fas fa-chart-pie"
            ]
        ];
        return view('pages.admin.dashboard', $this->data);
    }

    public function actions(Request $request) {
        $actionLogModel = new ActionLog();
        $this->data['actions'] = $actionLogModel->get($request);

        return view('pages.admin.actions.index', $this->data);
    }

    public function restaurants() {
        $restaurantModel = new Restaurant();
        $this->data['restaurants'] = $restaurantModel->getAll();

        return view('pages.admin.restaurants.index', $this->data);
    }

    public function orders() {
        $orderModel = new Order();
        $this->data['orders'] = $orderModel->get();

        return view('pages.admin.orders.index', $this->data);
    }
}
