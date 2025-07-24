<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

/* Route::get('/', function () {
    return view('welcome');
}); */



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Routes pour les produits
Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');


// Route pour gérer le caddie
Route::get('/cart', [ProductController::class, 'cart'])->name('cart.index');
Route::post('/cart/add/{id}', [ProductController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove/{id}', [ProductController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/clear', [ProductController::class, 'clearCart'])->name('cart.clear');
// Route pour gérer le caddie
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::post('/cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');

Route::post('/cart/remove/{product}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::post('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');