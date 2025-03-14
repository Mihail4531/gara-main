<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function() {
    Route::get('/', [BrandController::class, 'index'])->name('page.brand');
});

Route::prefix('/brands')->as('brand.')->group(function() {
    Route::get('/', [BrandController::class, 'show'])->name('index');
    Route::get('/{id}/all', [ProductController::class, 'showOrBrand'])->name('showOrBrand');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'user'])->name('dashboard');

Route::get('/dashboard-superuser', function () {
    return view('dashboard-superuser');
})->middleware(['auth', 'verified', 'superUser'])->name('dashboard-superuser');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::prefix('/products')->as('product.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
});

require __DIR__.'/auth.php';
