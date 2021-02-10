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
                        @endphp
                        @forelse($cartItems as $cart)
                        @php

                        $price = price($cart['price'] * $cart['quantity']);
                        @endphp

                        <tr >
                                
                                <td><a href="vegetables/{{$cart['id']}}/{{$cart['title']}}">{{$cart['title']}}</a></td>
                                <td>{{ $cart['price']}}</td>
                                <td>{{$cart['quantity']}}</td>
                                <td>{{$price}}</td>
                                <td><form action='cartremove'><input type="hidden" name="productId" value="{{$cart['id']}}"><button class="btn btn-sm btn-danger">x</button></form></td>
                        </tr>
                        @empty
                        <p>No items in cart</p>
                        @endforelse
                </tbody>
        </table>
        <div class="d-block">
                <a class="btn btn-primary float-right" href="checkout">Checkout</a>
        </div>
</section>
@endsection