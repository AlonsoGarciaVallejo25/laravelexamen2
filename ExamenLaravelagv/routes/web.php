<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductagvController;

Route::get('/', function () {
    return redirect()->route('productsagv.index');
});

Route::resource('productsagv', ProductagvController::class);
