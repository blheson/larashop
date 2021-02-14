<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;
use App\Http\Controllers\CartController;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CartController $cart)
    {
        $order = new Order;
        $user_id = getUserId($request);
        $order->name = $request->input('name');
        $order->user_id = $user_id;
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->cartItems = $request->input('cartItems');

        if (!$order->save()) {
            $request->session()->flash('error', 'Error in order');
            return view('checkout');
        }
        $request->session()->flash('success', 'Order saved successfully');
        $cart->destroy($user_id);
        $request->session()->forget('cart');
        return view('/pay', ['payment' => $request->payment, 'email' => $request->email, 'totalPrice' => $request->totalPrice]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo 'destroy';
    }
}
