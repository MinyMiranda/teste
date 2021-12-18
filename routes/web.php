<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PersonController;
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

Route::prefix('companies')->group(function () {
    Route::get('/', [CompanyController::class, 'index']);
    Route::post('/', [CompanyController::class, 'store']);
    Route::put('/{id}', [CompanyController::class, 'update']);
    Route::delete('/{id}', [CompanyController::class, 'delete']);
});

Route::prefix('persons')->group(function () {
    Route::get('/', [PersonController::class, 'index']);
    Route::post('/', [PersonController::class, 'store']);
    Route::put('/{id}', [PersonController::class, 'update']);
    Route::delete('/{id}', [PersonController::class, 'delete']);
});
