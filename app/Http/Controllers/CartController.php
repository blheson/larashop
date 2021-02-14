<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Vegetable;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    protected $cart;
    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    private function initCart()
    {
        return new Cart;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = (int) $request->input('id');
        $cartItems  = session()->get('cart');
        $price = (float) $request->input('price');
        $newItems = [
            'id' => $id,
            'quantity' => (int) $request->input('quantity'),
            'price' => $price,
            'title' => $request->input('title')
        ];
        if (is_array($cartItems)) {
            $cartItems[$id] = $newItems;
        } else {
            $cartItems = [$id => $newItems];
        }
        $this->finalStore($request, $cartItems);
        return redirect(url()->previous());
    }
    private function finalStore($request, $cartItems)
    {
        session()->put('cart', $cartItems);
        $user_id = getUserId($request);
        $cart = Cart::updateOrCreate([
            'user_id' => $user_id
        ], [
            'items' => json_encode($cartItems)
        ]);
        flashSession($cart, 'Item added to cart successfully', 'Error in cart');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $cartItems = session()->get('cart');
        unset($cartItems[$id]);
        $this->finalStore($request, $cartItems);
        return redirect('/cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::destroy($id);
    }
}
