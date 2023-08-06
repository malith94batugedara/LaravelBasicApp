<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');

    Route::get('/add-category', [CategoryController::class, 'create'])->name('admin.add-category');

    Route::post('/add-category', [CategoryController::class, 'store'])->name('admin.add-category');

});
