<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangeCartRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Models\Cart;
use App\Models\Food;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends ClientController
{
    private $orderModel;
    private $cartModel;

    public function __construct()
    {
        parent::__construct();
        $this->orderModel = new Order();
        $this->cartModel = new Cart();
    }

    public function addItem(Request $request) {
        try {
            $foodId = $request->get('id');
            $userId = $request->session()->get('user')->id;

            $this->cartModel->addItem($userId, $foodId);

            $foodModel = new Food();
            $this->logAction('User added ' . $foodModel->find($foodId)->name . " (ID: $foodId)" . ' to their cart.', $request, $userId);

            return response()->json('Item was added to your order successfully.');
        } catch(\Exception $ex) {
            \Log::error($ex->getMessage());
            return response('We encountered an error.', 500);
        }
    }

    public function change(ChangeCartRequest $request) {
        try {
            $cartId = $request->get('id');
            $action = $request->get('action');
            $userId = $request->session()->get('user')->id;

            $result = $this->cartModel->change($userId, $cartId, $action);

            if($result) {
                $this->logAction('User altered their cart.', $request, $userId);

                return response()->json('Action completed successfully.');
            }

            return response('We encountered an error.', 500);
        } catch(\Exception $ex) {
            \Log::error($ex->getMessage());
            return response('We encountered an error.', 500);
        }
    }

    public function getItems(Request $request) {
        try {
            $userId = $request->session()->get('user')->id;
            $restaurantId = $request->get('restaurantId');

            $items = $this->cartModel->getItems($userId, $restaurantId);

            return response()->json($items);
        } catch(\Exception $ex) {
            \Log::error($ex->getMessage());
            return response('We encountered an error.', 500);
        }
    }

    public function store(StoreOrderRequest $request) {
        try {
            $userId = $request->session()->get('user')->id;
            $restaurantId = $request->get('restaurantId');
            $address = $request->get('address');
            $items = $this->cartModel->getItems($userId, $restaurantId);

            if(!count($items))
                return redirect()->back()->withErrors(['Your order is empty.']);

            \DB::beginTransaction();
            $orderId = $this->orderModel->store($userId, $address, $items);
            $this->cartModel->empty($items);
            \DB::commit();

            $this->logAction('User created an order. Order id: ' . $orderId, $request, $userId);

            return redirect()->back()->with('messages', ['Your order was created successfully.']);
        } catch(\Exception $ex) {
            \DB::rollBack();
            \Log::error($ex->getMessage());
            return redirect()->back()->withErrors(['We encountered an error.']);
        }
    }

    public function details($id) {
        $this->data['details'] = $this->orderModel->details($id);
        $this->data['nav'] = $this->navModel->getAdminNav();
        $this->data['pages'] = [
            [
                "name" => "Orders",
                "route"=> "admin.orders"
            ],
            [
                "name" => "Order details"
            ]
        ];

        return view('pages.admin.orders.details', $this->data);
    }
}
