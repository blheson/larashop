@extends('layout.app')
@section('content')
<section class="pb-5 container">
        <h2>Cart</h2>
        <table class="table table-condensed">
                <thead>
                        <th>Title</th>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>price</th>
                        <th></th>
                </thead>
                <tbody>
                        @php
                        $cartItem = session('cart')??[];
                       
                        @endphp
                        @forelse($cartItem as $cart)
                        @php

                        $price = price($cart['price'] * $cart['quantity']);
                        @endphp

                        <tr>
                                <td><a href="vegetables/{{$cart['id']}}">{{$cart['title']}}</a></td>
                                <td>{{ $cart['price']}}</td>
                                <td>{{$cart['quantity']}}</td>
                                <td>{{$price}}</td>
                                <th><button class="btn btn-sm btn-danger">x</button></th>
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