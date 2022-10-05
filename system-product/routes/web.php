<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return redirect()->route('PageShowProducts');
});

Route::get('/show-products', [ProductController::class, 'showProducts'])
    ->name('PageShowProducts');

Route::get('/create-product', [ProductController::class, 'createProduct'])
    ->name('PageCreateProduct');

Route::post('create', [ProductController::class, 'create'])
    ->name('Create');
