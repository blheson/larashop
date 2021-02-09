@extends('layout.app')
@section('content')
<style>
    .row2 {
        display: grid;
        gap: 10px;
        grid-template-areas: "a a"
    }

    .productSection {
        padding-bottom: 1rem;
    }
</style>
@include('includes.breadcrumb')
<section class="productSection">
    <div class="row2">
        <div>
            <img src="/images/p2.png" alt="">
        </div>
        <div>
            <h2>{{$vegetable->title}}</h2>
            <span>Product ID: {{$vegetable->id}}</span>
            <hr>
            <div>
                <p>Price: {{$vegetable->new_price}}</p>
                <div>
                    Description: {{$vegetable->description}}
                </div>
            </div>
            <div>
                <form action="/cart" method="post">
                    @csrf
                    <input type="hidden" name="price" value="{{$vegetable->new_price}}" id="">
                    <input type="hidden" name="title" value="{{$vegetable->title}}" id="">
                    <input type="hidden" name="id" value="{{$vegetable->id}}">
                    <div class="form-group">
                        <label for="quantity" class="d-flex">Quantity</label>
                        <input type="number" name="quantity" class="form-control" value="1">
                    </div>
                    <button class="btn btn-success addToCart" type="submit">Add to cart</button>
                </form>
                <div>
                    <a href="checkout" class="btn btn-success">Checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection