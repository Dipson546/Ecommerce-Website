<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::latest()->paginate(10);
        
        return view('back.dashboard.orders',compact('orders'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        
      $validated =  $request->validate([
          'status'=> 'required|in:Processing,Confirmed,Shipping,Delivered,Cancelled'
        ]);


        $order->update($validated);

        flash('order updated.')->success();

        return redirect()->route('back.orders.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        $order->delete();

        return redirect()->route('back.orders.index');
    }
}
