<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\authController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\UserController;



Route::get('/', [authController::class, 'login']);
Route::post('/', [authController::class, 'auth_login']);
Route::get('/logout', [authController::class, 'logout']);

Route::middleware(['adminUser'])->group(function(){
    Route::get('/dashboard', [dashboardController::class, 'dashboard_panel']);

    Route::get('/role_list', [roleController::class, 'role_list']);
    Route::get('/role_add', [roleController::class, 'role_add']);
    Route::post('/role_insert', [roleController::class, 'role_insert']);

    Route::get('/role_edit/{id}', [roleController::class, 'role_edit']);
    Route::put('/role_update/{id}', [roleController::class, 'role_update']);

    Route::get('/role_delete/{id}', [roleController::class, 'role_delete']);



    Route::get('/user_list', [UserController::class, 'user_list']);
    Route::get('/user_add', [UserController::class, 'user_add']);
    Route::post('/user_insert', [UserController::class, 'user_insert']);
    Route::get('/user_edit/{id}', [UserController::class, 'user_edit']);
    Route::post('/user_update/{id}', [UserController::class, 'user_update']);

    Route::get('/user_delete/{id}', [UserController::class, 'user_delete']);



});




