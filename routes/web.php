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

    //admin routes

    Route::prefix('admin')->group(function () {
        Route::get("/dashboard",[App\Http\Controllers\AdminPageController::class, 'index'])->name('admin-index');

        // Members
        //See
        Route::get("/member/all",[App\Http\Controllers\AdminPageController::class, 'member_all'])->name('admin-member-all');
        //delete
        Route::get('/member/{id}/delete',[App\Http\Controllers\AdminPageController::class, 'member_delete'])->name('admin-member-delete');
        //Promote
        Route::get('/member/{id}/promote-admin',[App\Http\Controllers\AdminPageController::class, 'member_promote'])->name('admin-member-promote');
         // Change Members
         Route::get('/member/{id}/change-member',[App\Http\Controllers\AdminPageController::class, 'change_member'])->name('admin-member-change');


         //Category
         //See
         Route::get("/category",[App\Http\Controllers\CategoryController::class, 'index'])->name('category-index');
         //Create
         Route::post("/category",[App\Http\Controllers\CategoryController::class, 'create'])->name('category-index');
         //Delete
         Route::get("/category/{id}/delete",[App\Http\Controllers\CategoryController::class, 'delete'])->name('category-delete');
         //Edit
         Route::get("/category/{id}/edit",[App\Http\Controllers\CategoryController::class, 'edit'])->name('category-edit');
    });
    
});

