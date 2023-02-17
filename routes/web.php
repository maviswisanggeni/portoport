<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LikedProductController;

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

Route::group(['prefix' => 'profile'], function () {
    Route::get('/all', [ProfileController::class, 'index'])->name('profile.index');
    // Route::get('/create', [ProfileController::class, 'create'])->name('profile.create');
    // Route::post('/store', [ProfileController::class, 'store'])->name('profile.store');
    // Route::get('/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::post('/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
    // Route::get('/delete/{id}', [ProfileController::class, 'delete'])->name('profile.delete');
});

Route::group(['prefix' => 'product'], function () {
    Route::get('/all', [ProductController::class, 'index'])->name('product.index');
    // Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    // Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    // Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    // Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    // Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
});

Route::group(['prefix' => 'about'], function () {
    Route::get('/all', [AboutController::class, 'index'])->name('about.index');
    // Route::get('/create', [AboutController::class, 'create'])->name('about.create');
    // Route::post('/store', [AboutController::class, 'store'])->name('about.store');
    // Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    // Route::post('/update/{id}', [AboutController::class, 'update'])->name('about.update');
    // Route::get('/delete/{id}', [AboutController::class, 'delete'])->name('about.delete');
});

Route::group(['prefix' => 'likedproduct'], function () {
    Route::get('/all', [LikedProductController::class, 'index'])->name('likedproduct.index');
    // Route::get('/create', [LikedProductController::class, 'create'])->name('likedproduct.create');
    // Route::post('/store', [LikedProductController::class, 'store'])->name('likedproduct.store');
    // Route::get('/edit/{id}', [LikedProductController::class, 'edit'])->name('likedproduct.edit');
    // Route::post('/update/{id}', [LikedProductController::class, 'update'])->name('likedproduct.update');
    // Route::get('/delete/{id}', [LikedProductController::class, 'delete'])->name('likedproduct.delete');
});

Route::get('/', function () {
    return view('welcome');
});
