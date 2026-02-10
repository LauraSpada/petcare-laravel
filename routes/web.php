<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VetsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('vets', VetsController::class);
