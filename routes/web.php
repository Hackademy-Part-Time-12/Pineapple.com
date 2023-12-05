<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [FrontController::class, 'welcome'])->name('welcome');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/show/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');

Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/show/{category}', [FrontController::class, 'show'])->name('category.show');

Route::get('/revisor/home', [RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');
Route::patch('/accetta/annuncio/{product}', [RevisorController::class, 'acceptProduct'])->middleware('isRevisor')->name('revisor.accept_product');
Route::patch('/rifiuta/annuncio/{product}', [RevisorController::class, 'rejectProduct'])->middleware('isRevisor')->name('revisor.reject_product');
Route::get('/richiesta/revisiore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/rendi/revisiore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');
Route::get('/revisor/formRevisor', [RevisorController::class, 'formRevisor'])->middleware('auth')->name('form.revisor');

Route::get('/ricerca/annuncio', [FrontController::class, 'searchProducts'])->name('products.search');

Route::post('/lingua/{lang}', [FrontController::class, 'setLanguage'])->name('set_language_locale');
