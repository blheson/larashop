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
    public function __construct(){

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        return view('cart.index', ['data' => $data]);
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
        // session()->invalidate();
        $id = (int) $request->id;
        $cartItems  = session()->get('cart');
        // $product = Vegetable::find($id);
        $price = (float) $request->price;
        $newItems = [
            'id' => $id,
            'quantity' => (int) $request->quantity,
            'price'=> $price,
            'title'=> $request->title
        ];
        if (is_array($cartItems)) {
            $cartItems[$id] = $newItems;
        } else {
            $cartItems = [$id => $newItems];
        }


        session()->put('cart', $cartItems);
        $user_id = Auth::check() ? $request->session->get('users')['id'] : $request->cookie('larashop_session');
        $cart = Cart::updateOrCreate([
            'user_id' => $user_id
        ], [
            'items' => json_encode($request->session()->get('cart'))
        ]);
        if ($cart)
            $request->session()->flash('success', 'Item added to cart successfully');
        else
            $request->session()->flash('error', 'Error in cart');

       return redirect(url()->previous());
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
