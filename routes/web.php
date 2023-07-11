<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//pages route
Route::get('/about',[AboutController::class,'about'])->name('about.page');
Route::get('/contact',[ContactController::class,'contact'])->name('contact.page');
Route::get('/cart',[CartController::class,'cart'])->name('cart.page');
Route::get('/product',[ProductController::class,'product'])->name('product.page');
Route::get('/order',[OrderController::class,'order'])->name('order.page');


//auth
Route::get('/login',[LoginController::class,'login'])->name('login.page');
Route::get('/register',[RegisterController::class,'register'])->name('register.page');



//admin
Route::get('/admin-panel',[DashboardController::class,'index'])->name('dash.page');