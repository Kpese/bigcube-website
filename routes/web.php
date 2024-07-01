<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('products')->group(function () {
    Route::get('/{sectionId?}', [HomeController::class, 'index'])->name('products.section');
});

Route::get('/cart', [HomeController::class, 'cart'])->name('cart')->middleware('auth');
Route::post('/Products/{product}/cart', [HomeController::class, 'add_cart'])->name('add_cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [HomeController::class, 'store_checkout'])->middleware('auth');
Route::get('/thanks', [HomeController::class, 'thank'])->name('thank')->middleware('auth');
Route::post('/contact', [ContactController::class, 'sendContactEmail'])->name('contact.send');

Route::delete('/Carts/{cart}', [HomeController::class, 'destroy_cart'])->name('delete.cart');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'admin'])->group(function () {

Route::get('/panel', [AdminController::class, 'index'])->name('panel');
Route::get('/panel/product', [AdminController::class, 'view'])->name('product');
Route::get('/Products/{slug}', [AdminController::class, 'edit_product'])->name('product.edit');
Route::post('/Products/{slug}', [AdminController::class, 'update_product'])->name('product.update');
Route::get('/product/create', [AdminController::class, 'create_product'])->name('product.create');
Route::post('/product/create', [AdminController::class, 'store']);
Route::delete('/Products/{product}', [AdminController::class, 'delete_product'])->name('product.delete');
Route::get('/panel/order', [AdminController::class, 'order'])->name('order');

Route::get('/Orders/{order}', [AdminController::class, 'paid'])->name('paid');

Route::get('/panel/section', [AdminController::class, 'view_section'])->name('section');
Route::get('/section/create', [AdminController::class, 'create_section'])->name('section.create');
Route::post('/section/create', [AdminController::class, 'store_section']);
Route::get('/Sections/{section}', [AdminController::class, 'edit_section'])->name('section.edit');
Route::post('/Sections/{section}', [AdminController::class, 'update_section'])->name('section.update');
Route::delete('/Sections/{section}', [AdminController::class, 'delete_section'])->name('section.delete');
});


require __DIR__.'/auth.php';
