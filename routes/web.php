<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KurirController;

Route::resource('kurirs', KurirController::class);

Route::get('/', function () {
    return view('welcome');
});
