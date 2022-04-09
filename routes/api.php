<?php

use App\Http\Controllers\API\Auth\CheckOtpController;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ClotheController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {

    Route::resource('clothes', ClotheController::class)->only(['index', 'store']);

    Route::get('logout', [LoginController::class, 'destroy']);
});

Route::post('login', [LoginController::class, 'store']);

Route::post('register', [RegisterController::class, 'store']);

Route::post('check-otp', CheckOtpController::class);

Route::get('categories', [CategoryController::class, 'index']);
