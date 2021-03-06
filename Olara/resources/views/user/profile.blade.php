@extends('layouts.master')
@include('partials.header')
@section('content')
<h1>User Profile</h1>
          <hr>
          <h2>My Orders</h2>
  <div class="row">
          @foreach($orders as $order)
          <div class=".col-md-4 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-body">
            <ul class="list-group">
            @foreach($order->cart->items as $item)
                <li class="list-group-item">
                <span class="badge">${{ $item['price'] }}$</span>
                {{$item['item']['title'] }} | {{$item['qty'] }}Units
                </li>
            @endforeach
            </ul>
            </div>
          <div class="panel-footer">
          <strong>Total Price: ${{ $order->cart->totalPrice }}</strong>
          </div>
        </div>
        </div>
        @endforeach
      
  </div>
  @endsection
