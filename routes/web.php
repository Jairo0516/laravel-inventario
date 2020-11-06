<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;


Route::get('/', function () {
    return view('home');
});
Route::get('/products', function () {
    return redirect('/');
});
Route::get('/stores', function () {
    return redirect('/');
});


Route::prefix('product')->group(function () {
    Route::put('/{id}', [ProductController::class, 'update']);
    Route::get('/{id}', [ProductController::class, 'show']);
    Route::get('/', [ProductController::class, 'all']);
    Route::post('/', [ProductController::class, 'store']);
});
Route::prefix('store')->group(function () {
    Route::put('/{id}', [StoreController::class, 'update']);
    Route::get('/{id}', [StoreController::class, 'show']);
    Route::get('/', [StoreController::class, 'all']);
    Route::post('/', [StoreController::class, 'store']);
});

//Route::get('/{any}', [\App\Http\Controllers\HomeController::class,'vueroute'])->where('any', '.*');
