<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\IndexController;
use App\Http\Controllers\Api\Vache\VacheShowController;
use App\Http\Controllers\Api\Vache\VacheIndexController;
use App\Http\Controllers\Api\User\StoreController;
use App\Http\Controllers\Api\Vache\VacheStoreController;
use App\Http\Controllers\Api\Vache\VacheEditController;
use App\Http\Controllers\Api\Vache\VacheDeleteController;


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
        Route::get('/{vache}', VacheShowController::class)->name('vacheshow');
        Route::delete('/{vache}', VacheDeleteController::class)->name('vachedelete');
        Route::patch('/{vache}', VacheEditController::class)->name('vacheedit');
        Route::post('/', VacheStoreController::class)->name('vachestore');
    });