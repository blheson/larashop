@extends('layout.app')
@section('content')

@include('includes.breadcrumb')

<section class="productSection container">
    <div class="row2">
        <div>
            <img src="/images/p2.png" alt="">
        </div>
        <div>
            @include('includes.messages')
            <h2>{{$vegetable->title}}</h2>
            <span>Product ID: {{$vegetable->id}}</span>
            <hr>
            <div>
                <p>Price: {{price($vegetable->new_price)}}</p>
                <div>
                    <p>
                        Description: {{$vegetable->description}}</p>
                </div>
            </div>
            <div>
                <form action="/cart" method="post">
                    @csrf
                    <input type="hidden" name="price" value="{{$vegetable->new_price}}" id="">
                    <input type="hidden" name="title" value="{{$vegetable->title}}" id="">
                    <input type="hidden" name="id" value="{{$vegetable->id}}">
                    <div class="form-group d-flex">
                        <label for="quantity" class="d-flex mr-2">Quantity:</label>
                        <input type="number" name="quantity" class="form-control mr-2 quantity" value="1" style="width: 60px;">

                        <button class="btn btn-success addToCart" type="submit">Add to cart</button>
                    </div>
                </form>
                <div>
                    <a href="/checkout" class="btn btn-primary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection