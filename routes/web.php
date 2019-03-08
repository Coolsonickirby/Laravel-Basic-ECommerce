<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', 'RoutingController@index');

Route::get('/cart', 'CartController@index');

Route::get('/cart/additem/{id}', 'CartController@additem');

Route::get('/cart/removeitem/{rowid}', 'CartController@removeitem');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
