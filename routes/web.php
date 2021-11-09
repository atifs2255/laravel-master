<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@home');

Route::get('add-new-product', 'HomeController@index');
Route::get('view-products', 'HomeController@viewProducts');

//Product Management Routes
Route::post('add-product','HomeController@addProduct');
Route::post('update-product','HomeController@updateCurrentProduct');
Route::get('export-products','HomeController@export');


Route::get('product/delete/{p_id}','HomeController@deleteproduct');
Route::get('product/edit/{p_id}','HomeController@updateProduct');
