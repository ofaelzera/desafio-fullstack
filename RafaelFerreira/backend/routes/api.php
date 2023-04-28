<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactTypesController;
use App\Http\Controllers\UsersController;

Route::controller(AuthController::class)->prefix('auth')->group(function (){
    Route::post('/login',   'login');
    Route::get('/logout',   'logout');
    Route::get('/refresh',  'refresh');
    Route::get('/me',       'me');
});

Route::controller(UsersController::class)->prefix('user')->group(function (){

    Route::post('create',       'create');
    Route::put('update/{id}',   'update');
    Route::delete('delete/{id}','delete');

    Route::get('get/all',       'getAll');
    Route::get('get/id/{id}',   'getById');

});

Route::controller(ContactController::class)->prefix('contact')->group(function (){

Route::post('create',       'create');
Route::put('update/{id}',   'update');
Route::delete('delete/{id}','delete');

Route::get('get/all/{use_id}',      'getAll');
Route::get('get/id/{id}',           'getById');

});

Route::controller(ContactTypesController::class)->prefix('contact-type')->group(function (){

Route::get('get/all',  'getAll');

});
