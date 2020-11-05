<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return redirect('/');
});
Route::get('/stores', function () {
    return redirect('/');
});

//Route::get('/{any}', [\App\Http\Controllers\HomeController::class,'vueroute'])->where('any', '.*');
