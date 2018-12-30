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

    return view('home');
});

Route::get('/language/{slug}', function ($slug) {
	App::setLocale($slug);
	session(['locale' => $slug]);
    return view('home');
});

Route::get('/product/{product}', [
	'as'=> 'product_path',
	'uses' => 'ProductsController@show'
]);

Route::get('/cart', [
	'as'=> 'cart_path',
	'uses' => 'CartController@show'
]);
Route::get('/artists/{user}', [
	'as'=> 'artist_path',
	'uses' => 'ArtistsController@show'
]);
Route::get('/submenu/{submenu}', [
	'as'=> 'submenu_path',
	'uses' => 'ProductsController@submenu'
]);
