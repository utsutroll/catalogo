<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CatalogoController;


Auth::routes(['verify' => true]);

Route::resource('/', 'CatalogoController');

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/shoping-cart', [CatalogoController::class, 'shoping_cart'])->name('carro_de _compra');

Route::resource('/product-detail', 'ProductDetailController');

Route::get('/products-checkout', function (){

    return view('products-checkout');
    
})->middleware('auth');