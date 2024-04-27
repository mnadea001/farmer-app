<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\UsersListController;
use App\Http\Controllers\Api\Vache\VachesListController;

Route::get('/vaches', \App\Http\Controllers\Vache\VachesListController::class);
Route::get('/', \App\Http\Controllers\User\UsersListController::class);
Route::view('/users/create', 'users.create')->name('users.create');