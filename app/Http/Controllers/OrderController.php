<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $orders = $request->input('orders');

        foreach ($orders as $order) {
            Order::create([
                'menu' => $order['menu'],
                'quantity' => $order['quantity'],
                'total_price' => $order['totalPrice']
            ]);
        }

        return response()->json(['message' => 'Pesanan Berhasil!']);
    }
}
