<?php
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
