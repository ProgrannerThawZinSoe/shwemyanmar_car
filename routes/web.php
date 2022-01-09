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

Route::get("/",function(){
    return view("welcome");
});

Route::get("/cars",function(){
    return view("cars");
});

Route::get("/sell/car",function(){
    return view("sell");
});

Auth::routes();


// auth middleware 
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('order');

    Route::get('/setting', [App\Http\Controllers\HomeController::class, 'setting'])->name('setting');
});

Route::get("/admin/dashboard",[App\Http\Controllers\AdminPageController::class, 'index'])->name('admin-index');