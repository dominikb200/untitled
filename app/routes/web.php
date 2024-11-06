<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RegisteredUserController;
use \App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);

Route::delete('/products/{product}', [ProductsController::class, 'destroy']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/products/create', [ProductsController::class, 'create']);
Route::post('/products', [ProductsController::class, 'store'])->middleware('auth');
Route::get('/products/{product}', [ProductsController::class, 'show']);

Route::get('/products/{product}/edit', [ProductsController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'product')
;
Route::patch('/products/{id}', [ProductsController::class, 'update']);
