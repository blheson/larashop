@extends('layout.app')
@section('content')
<section class="mt-3 mb-3">
    <div class="container">

        <div class="row">
            <div class="col-md-7">
                @include('includes.messages')
                <h2>Check out form</h2>
                <form action="orders" method="post" class="checkoutForm">
                    @php
                    $finalPrice = 0;
                    $cartItems = getCartItems();
                    $json = json_encode($cartItems);
                    @endphp
                    @csrf
                    <input type="hidden" name="cartItems" value="{{$json}}">
                    <input type="hidden" name="totalPrice" value="">
                    <div class="form-group">
                        <label for="">
                            Name</label>
                        <input type="text" class="form-control" name="name" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">
                            Email</label>
                        <input type="text" class="form-control" name="email" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">
                            Phone number</label>
                        <input type="text" class="form-control" name="phone" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">
                            Address</label>
                        <input type="text" class="form-control" name="address" id="" required>
                    </div>
                    <div class="form-group">
                        <label for="">Payment Method
                            <select name="payment" id="" class="form-control">
                                <option value="online">Online</option>
                                <option value="card">Card</option>
                            </select>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="">
                            <input type="checkbox" name="tos" onclick="DOM.checkTos()"> <small>Accept terms</small>
                        </label>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-success checkout_btn" type="submit" disabled>Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                @if(empty($cartItems))

                <div class="card p-3">
                    <p>No item in Cart</p>
                </div>
                @else
                <table class="table table-condensed">
                    <thead>
                        <th>Title</th>

                        <th>Item</th>
                        <th>price</th>
                    </thead>
                    <tbody>

                        @forelse($cartItems as $cart)
                        @php
                        $price = $cart['price'] * $cart['quantity'];
                        $finalPrice+=$price;
                        @endphp
                        <tr>
                            <td><a href="vegetables/{{$cart['id']}}/{{$cart['title']}}">{{$cart['title']}}</a></td>
                            <td>{{$cart['price'] .' * '. $cart['quantity']}}</td>
                            <td>{{price($price)}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td>
                                <p>no item</p>
                            </td>
                        </tr> @endforelse

                    </tbody>

                </table>
                <table>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td>Table: <span class="cartTotal">{{price($finalPrice)}}</span></td>
                        </tr>
                    </tfoot>
                </table>
                @endif
            </div>
        </div>
    </div>
</section>
<script>
    let finalPrice = <?=$finalPrice?>;
    let input = document.querySelector('input[name=totalPrice]');
    input.value = finalPrice;
</script>
@endsection