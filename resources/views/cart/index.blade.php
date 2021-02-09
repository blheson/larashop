@extends('layout.app')
@section('content')
<div>
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
                        @forelse(session('cart') as $cart)
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
                        <p>No item</p>
                        @endforelse
                </tbody>
        </table>
</div>
@endsection