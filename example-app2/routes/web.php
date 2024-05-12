<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AboutController;
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

//Route::resource('admin', AdminController::class);
Route::resource('cart', CartController::class);
Route::resource('login2', LoginController::class);
Route::resource('main', MainController::class);
Route::resource('signup2', SignupController::class);
Route::resource('products', ProductsController::class);
Route::resource('item', ItemController::class);
Route::resource('about', AboutController::class);
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::resource('orders', OrderController::class);


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('main.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::put('/admin/products/{product}', [AdminController::class, 'update'])->name('admin.products.update');

// Define routes accessible only to admin users
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('admin', AdminController::class);
});

//creating products
//Route::post('/admin/products', 'AdminController@store')->name('admin.products.store');
Route::post('/admin/products', [AdminController::class, 'store'])->name('admin.products.store');
//deleting products
Route::delete('/admin/products/{product}', [AdminController::class, 'destroy'])->name('admin.products.destroy');

//editing products
Route::get('/admin/products/{product}/edit', [AdminController::class, 'edit'])->name('admin.products.edit');

//item
Route::get('/item/{id}', [ItemController::class, 'index'])->name('item.index');

// pridavanie + odoberanie produktov z kosika
Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');

// checkout
Route::post('/checkout', [CartController::class, 'checkout'])->name('checkout');

// main navigacia
Route::put('/products/{id}', [ProductsController::class, 'show'])->name('products.lol');

//add item to cart
Route::post('/item/cart', [ItemController::class, 'store'])->name('item.cart');


require __DIR__.'/auth.php';
