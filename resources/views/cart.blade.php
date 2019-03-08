@extends('layouts.layout')
<title>Cart</title>
@section('content')
    <br>
    <div class="container">
    <h1>Cart</h1>
    @if(Cart::count() > 0)
    <table class="table table-hover">
    <tr class="table-dark">
        <th scope="row"><h4>Product</h4></th>
        <td><h4>Quantity</h4></td>
        <td><h4>Price</h4></td>
    </tr>
    @foreach(Cart::content() as $cartitem)
        <tr class="table-dark">
            <th scope="row">{{$cartitem->name}}</th>
            <td>{{$cartitem->qty}}</td>
            <td>${{$cartitem->price}}</td>
            <td><a href="/cart/removeitem/{{$cartitem->rowId}}">Remove Item</a></td>
        </tr>
    @endforeach
    <br>
    <tr class="table-dark">
        <th scope="row">Subtotal:</th>
        <td></td>
        <td>${{Cart::subtotal()}}</td>
    </tr>
    <tr class="table-dark">
        <th scope="row">Tax:</th>
        <td></td>
        <td>${{Cart::tax()}}</td>
    </tr>
    <tr class="table-dark">
        <th scope="row">Total:</th>
        <td></td>
        <td>${{Cart::total()}}</td>
    </tr>
    </table>
    @else
    <h3>Your cart is empty!</h3>
    @endif
    </div>
@endsection