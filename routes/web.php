<?php

use App\Http\Controllers\FrontedController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FrontedController::class, 'index']);
