<?php

use App\Http\Controllers\RedisController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test-redis', [RedisController::class, 'index']);
