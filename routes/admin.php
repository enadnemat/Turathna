<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function () {

    Route::get('/', [\App\Http\Controllers\AdminController::class, 'login'])->name('admin.index');
    Route::post('/postLogin', [\App\Http\Controllers\AdminController::class, 'postLogin'])->name('admin.login');
    Route::get('logout',[\App\Http\Controllers\AdminController::class , 'logout'])->name('admin.logout');

    Route::group(['middleware' => 'admin.auth'], function () {

        Route::get('home', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
    });
});
