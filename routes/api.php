<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\IndexController;

use App\Http\Controllers\Api\User\StoreController;

// Route::get('users', IndexController::class)->name( 'index');
// Route::post('users', StoreController::class)->name('store');

Route::prefix('users')
    ->as('users.')
    ->group(function () {
        Route::get('/', IndexController::class)->name('index');
        // Route::get('/{user}', ShowController::class)->name('show');
        Route::post('/', StoreController::class)->name('store');
    });

Route::prefix('vaches')
    ->as('vaches.')
    ->group(function () {
        Route::get('/', IndexController::class)->name('index');
        // Route::get('/{user}', ShowController::class)->name('show');
        // Route::post('/', StoreController::class)->name('store');
    });