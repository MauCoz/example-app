<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * get product by ean code.
     */
    private function getOrderById($orderId)
    {
        $order = Order::query()->where('order_id', $orderId)->first();

        // if product not found (empty) throw 404 error.
        // TODO: custom 404 page in views
        if (empty($order)) {abort(404, "This Order could not be found.");}

        return $order;
    }

    public function show()
    {
        $orders = Order::all();

        return view('order.orders', [
            'orders' => $orders,
        ]);
    }

    public function one($order_id)
    {
        $order = $this->getOrderById($order_id);

        return view('order.order', [
            'order' => $order,
        ]);
    }
}
