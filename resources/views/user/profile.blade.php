@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>User Profile</h1>
        <hr>
        <h2>My Orders</h2>
        @foreach($orders as $order)
            <div class="card">
                <div class="card-header">
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                            <li class="list-group-item">
                                <span class="badge">${{ $item['price'] }}</span>
                                {{ $item['item']['title'] }} | {{ $item['qty'] }} Units
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="card-body">
                    <strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
   