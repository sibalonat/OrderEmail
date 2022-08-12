<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Order;
use App\Events\OrderCreated;
use Illuminate\Http\Request;
use App\Http\Requests\OrderStoreRequest;

class OrderController extends Controller
{
    //

    public function index()
    {
        $orders = Order::query()->get();

        return Inertia::render('Dashboard', [
            'orders' => $orders
        ]);
    }

    public function store(OrderStoreRequest $request)
    {
        $order = Order::create($request->all());


        event(new OrderCreated($order));


        return redirect()->route('dashboard');
    }
}
