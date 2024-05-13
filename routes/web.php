<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\UsersListController;
use App\Http\Controllers\Api\Vache\VachesListController;
use App\Http\Controllers\Api\Vache\VacheShowController;

Route::get('/vaches', \App\Http\Controllers\Vache\VachesListController::class);
Route::get('/users', \App\Http\Controllers\User\UsersListController::class);
Route::view('/users/create', 'users.create')->name('users.create');
Route::view('/vaches/create', 'vaches.create')->name('vaches.create');
Route::view('/vaches/{vache}/edit', 'vaches.edit')->name('vaches.edit');
Route::view('/vaches/{vache}/delete', 'vaches.delete')->name('vaches.delete');
Route::view('/vaches/{vache}', 'vaches.show')->name('vaches.show');
Route::view('/', 'home')->name('home');
Route::view('/contact', 'contact')->name('contact');