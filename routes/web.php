<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(\App\Http\Controllers\DashboardController::class)
        ->prefix('dashboard')
        ->as('dashboard.')
        ->group(function () {
            Route::middleware('password.confirm')->get('/secret', 'secret')->name('secret');
            Route::get('/', 'index')->name('index');
        });

    Route::controller(\App\Http\Controllers\ProfileController::class)
        ->prefix('profile')
        ->as('profile.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
        });
});

Route::controller(\App\Http\Controllers\HomeController::class)
    ->as('home.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
    });
