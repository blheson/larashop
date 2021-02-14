<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\VegetablesController;
use App\Models\Vegetable;
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
//pages
Route::view('/', 'home',['homepage', true]);
Route::redirect('/index', '/');
Route::middleware('auth')->get('/admin', [PagesController::class, 'admin']);
Route::view('/about', 'about');
Route::view('/contact', 'contact');
//process order
Route::view('/checkout', 'checkout');
//process payment
Route::get('/pay', [PagesController::class, 'pay']);
Route::post('/contact', [ContactUsController::class, 'store']);
Route::get('/vegetables/{vegetable}/{title}', [VegetablesController::class, 'show'])->name('vegetables.view')->missing(function(){
    session()->flash('error','Product does not exists');
    return redirect()->route('vegetables.index');
});
Route::resources([
    '/vegetables' => VegetablesController::class,
    '/cart' => CartController::class,
    '/orders' => OrdersController::class
]);
