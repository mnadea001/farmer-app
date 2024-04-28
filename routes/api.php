<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\IndexController;

use App\Http\Controllers\Api\Vache\VacheIndexController;
use App\Http\Controllers\Api\User\StoreController;
use App\Http\Controllers\Api\Vache\VacheStoreController;


Route::prefix('users')
    ->as('users.')
    ->group(function () {
        Route::get('/', IndexController::class)->name('index');
        Route::post('/', StoreController::class)->name('store');
    });

Route::prefix('vaches')
    ->as('vaches.')
    ->group(function () {
        Route::get('/', VacheIndexController::class)->name('vacheindex');
        Route::post('/', VacheStoreController::class)->name('vachestore');
    });