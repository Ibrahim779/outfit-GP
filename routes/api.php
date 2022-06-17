<?php

use App\Http\Controllers\API\Auth\CheckOtpController;
use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\UpdateProfileController;
use App\Http\Controllers\API\CalendarController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\ClotheController;
use App\Http\Controllers\API\OutfitController;
use App\Http\Controllers\API\RecommendController;
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

    Route::apiResource('clothes', ClotheController::class)->except('update');

    Route::post('clothes/{clothe}', [ClotheController::class, 'update']);

    Route::post('recommend', RecommendController::class);

    Route::get('outfits', [OutfitController::class, 'index']);

    Route::get('outfits/{outfit}', [OutfitController::class, 'show']);

    Route::post('outfits', [OutfitController::class, 'store']);

    Route::post('update-profile', UpdateProfileController::class);

    Route::get('logout', [LoginController::class, 'destroy']);

    Route::apiResource('calendar', CalendarController::class)->except('update');

    Route::post('calendar/{calendar}', [CalendarController::class, 'update']);
});

Route::post('login', [LoginController::class, 'store']);

Route::post('register', [RegisterController::class, 'store']);

Route::post('check-otp', CheckOtpController::class);

Route::get('categories', [CategoryController::class, 'index']);
