<title>Prices</title>
@extends('layouts.layout')

@section('content')
    <br>
    <div class="container">
    <h1>Items</h1>
    @if(count($products) > 0)
    <table class="table table-hover">
      @foreach($products as $product)
      <tr class="table-dark">
        <th scope="row">{{$product->name}}</th>
        <td>${{$product->price}}</td>
        <td>{{$product->description}}</td>
        <td><a href="cart/additem/{{$product->id}}">Add to Cart (WIP)</a></td>
      </tr>
      @endforeach
    </table>
    @endif  
    </div>
@endsection