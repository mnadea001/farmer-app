<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\UsersListController;


Route::get('/', \App\Http\Controllers\User\UsersListController::class);
Route::view('/users/create', 'users.create')->name('users.create');