<?php

use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\VegetablesController;
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

Route::get('/', [PagesController::class, 'index']);
Route::get('/index', [PagesController::class, 'index']);
Route::get('/admin', [PagesController::class, 'admin']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [ContactUsController::class, 'index']);
Route::get('/checkout', [PagesController::class, 'checkout']);
Route::get('/pay', [PagesController::class, 'pay']);
Route::post('/contact', [ContactUsController::class, 'store']);
Route::get('/cartremove', [CartController::class, 'removeCartItem']);

Route::get('/vegetables/{id}/{title}', [VegetablesController::class, 'show']);
Route::resources([
    '/vegetables' => VegetablesController::class,
    '/cart' => CartController::class,
    '/orders' => OrdersController::class
]);
