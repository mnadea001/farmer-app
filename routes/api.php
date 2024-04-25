<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\IndexController;

use App\Http\Controllers\Api\User\StoreController;

Route::get('users', IndexController::class)->name( 'index');
Route::post('users', StoreController::class)->name('store');