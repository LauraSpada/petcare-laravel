<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\ConsultationsController;
use App\Http\Controllers\VetsController;
use App\Http\Controllers\ClientsController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('vets', VetsController::class);

Route::resource('clients', ClientsController::class);

Route::resource('animals', AnimalsController::class);

Route::resource('consultations', ConsultationsController::class);