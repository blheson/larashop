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
        // $data = [];
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
    /**
     * Remove an Item from cart
     * @param int $index
     * @return \Illuminate\Http\Response
     */
    public function removeCartItem(Request $request)
    {
        $productId = $request->productId;
        $cartItems = session()->get('cart');
        unset($cartItems[$productId]);
        $this->finalStore($request, $cartItems);
        return redirect('/cart');
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
        $id = (int) $request->id;
        $cartItems  = session()->get('cart');
        $price = (float) $request->price;
        $newItems = [
            'id' => $id,
            'quantity' => (int) $request->quantity,
            'price' => $price,
            'title' => $request->title
        ];
        if (is_array($cartItems)) {
            $cartItems[$id] = $newItems;
        } else {
            $cartItems = [$id => $newItems];
        }
        $this->finalStore($request, $cartItems);
        return redirect(url()->previous());
    }
    public function finalStore($request, $cartItems)
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
