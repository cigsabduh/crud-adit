<?php

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

// //API route for register new user
// Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
// //API route for login user
// Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

// Route::get('/test', [App\Http\Controllers\API\AuthController::class, 'test']);

//Protecting Routes
// Route::group(['prefix' => ''], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    Route::resource('programs', App\Http\Controllers\API\ProgramController::class);

    // // API route for logout user
    Route::get('/program/data', [App\Http\Controllers\API\ProgramController::class, 'getData']);
// });