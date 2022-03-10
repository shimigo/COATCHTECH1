<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;

Route::get('/building', [BuildingController::class, 'index']);
Route::get('/building/{room}', [BuildingController::class, 'room']);