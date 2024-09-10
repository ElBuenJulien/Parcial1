<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesDriver;
use App\Http\Controllers\ProductController;
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

Route::get('/Home', function () {
    return view('home');
});

Route::get('/Contact',[RoutesDriver::class,'ContactPage'])->name('contact');
Route::get('/Home',[RoutesDriver::class,'HomePage'])->name('home');

Route::get('/Products', [ProductController::class, 'ProductsPage'])->name('products');
Route::get('/productos/{id}', [ProductController::class, 'show'])->name('show');