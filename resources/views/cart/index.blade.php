@extends('layout.app')
@section('content')
<section class="pb-5 container">
        @include('includes.messages')
        <h2>Cart</h2>
        <table class="table table-condensed cartTable">
                <thead>
                        <th>Title</th>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>price</th>
                        <th></th>
                </thead>
                <tbody>
                        @php
                        $cartItems = getCartItems();
                        $finalPrice = 0;
                        @endphp
                        @forelse($cartItems as $cart)
                        @php

                        $price = $cart['price'] * $cart['quantity'];
                        $finalPrice+=$price;
                        @endphp

                        <tr>
                                <td><a href="vegetables/{{$cart['id']}}/{{$cart['title']}}">{{$cart['title']}}</a></td>
                                <td>{{ $cart['price']}}</td>
                                <td>{{$cart['quantity']}}</td>
                                <td>{{price($price)}}</td>
                                <td>
                                        <form action="cart/{{$cart['id']}}" method="post">@csrf<input name="_method" type="hidden" value="PUT">
                                                <input type="hidden" name="productId" value="{{$cart['id']}}"><button class="btn btn-sm btn-danger">x</button>
                                        </form>
                                </td>
                        </tr>

                        @empty
                        <tr>
                                <td></td>
                                <td>
                                        <p>No items in cart</p>
                                </td>
                        </tr>

                        @endforelse
                </tbody>

        </table>
        <div>
                <table style="display: block;float:right">
                        <tbody>
                                <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-right"><span class="text-right">Total: <span class="cartTotal">{{price($finalPrice)}}</span></td>
                                </tr>
                        </tbody>
                </table>
        </div>
        <div class="clearfix"></div>
        <div class="d-block">
                <a class="btn btn-primary float-right" href="/checkout">Checkout</a>
        </div>
</section>
@endsection