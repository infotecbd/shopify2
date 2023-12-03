<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\DummyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {

//     return view('welcome');
// });


Route::get('/', function () {
    return response("Welcome to Shopify App Development Course", 200);
})->middleware(['verify.shopify'])->name('home');

// Route::get('/', function () {
//     return view('welcome'); })->middleware(['verify.shopify'])->name('home');

// Route::get('/shop', function () {
//     return view('shop'); })->middleware(['verify.shopify'])->name('shop');

    Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index'])
    ->middleware(['verify.shopify'])->name('shop.index');


