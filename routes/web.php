<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Promise\Create;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/categories', CategoryController::class);



Route::get('/product/create', [ProductController::class, 'create'])->name('product_create');
Route::post('/product', [ProductController::class, 'imageUpload'])->name('product_store');
Route::get('/product/index', [ProductController::class, 'index'])->name('product_index');
Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('product_show');
Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product_destroy');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product_edit');

Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product_update');
