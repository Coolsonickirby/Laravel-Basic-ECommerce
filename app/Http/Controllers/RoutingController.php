<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class RoutingController extends Controller
{
    public function index(){

        $products = Product::all();

        return view('test')->with('products', $products);

    }
}
