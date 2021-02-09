@extends('layout.app') 
@section('content')
<section class="mt-3 mb-3">
    <div class="container">
@php
var_dump(session('cart'))
@endphp
        <div class="row">
            <div class="col-md-7">
                <h2>Check out form</h2>
                <form action="">
                    <div class="form-group">
                        <label for="">
                            Name</label>
                        <input type="text" class="form-control" name="name" id="">
                    </div>
                    <div class="form-group">
                        <label for="">
                            Email</label>
                        <input type="text" class="form-control" name="Email" id="">
                    </div>
                    <div class="form-group">
                        <label for="">
                            Phone number</label>
                        <input type="text" class="form-control" name="phone" id="">
                    </div>
                    <div class="form-group">
                        <label for="">
                            Address</label>
                        <input type="text" class="form-control" name="address" id="">
                    </div>
                    <div class="form-group">
                        <label for="">
                            <input type="radio" name="tos"> <small>Accept terms</small>
                        </label>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-5">

                <table class="table table-condensed">
                    <thead>
                        <th>Title</th>
         
                        <th>Item</th>
                        <th>price</th>
                    </thead>
                    <tbody> 
                    @forelse(session('cart') as $cart)
                        <tr>
                            <td><a href="vegetables/{{$cart['id']}}">{{$cart['title']}}</a></td>
                            <td>{{$cart['price'] .' * '. $cart['quantity']}}</td>
                            <td></td>
                        </tr>
                        @empty
                        <p>no item</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection