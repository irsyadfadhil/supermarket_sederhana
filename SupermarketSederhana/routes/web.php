<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\ProdukContoller;
use App\Http\Controllers\shoppingcart;

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/', Home::class)->parameters(['home' => 'home']);
Route::resource('produk', ProdukContoller::class)->parameters(['produk' => 'produk']);
Route::resource('shopping_cart', shoppingcart::class)->parameters(['shopping_cart' => 'shopping_cart']);


