<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\RealStateController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function (){
    Route::name('real_states.')->group(function (){
        Route::resource('real-states', RealStateController::class);
    });

    Route::name('users.')->group(function (){
        Route::resource('users', UserController::class);
    });

    Route::name('categories.')->group(function (){
        Route::get('categories/{id}/real-states', [CategoryController::class, 'realState']);
        Route::resource('categories', CategoryController::class);
    });
});
