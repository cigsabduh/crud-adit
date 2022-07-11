<?php

use GuzzleHttp\Promise\Create;
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

Route::get('/', function () {
    return view('login');
});



Route::get('/dashboard', [App\Http\Controllers\WebController::class, 'tampilan']);
Route::get('/welcome', [App\Http\Controllers\WebController::class, 'welcome']);
Route::get('form-input', [App\Http\Controllers\WebController::class, 'create']);
Route::post('/store', [App\Http\Controllers\WebController::class, 'store'])->name('store');
Route::get('/edit/{id}', [App\Http\Controllers\WebController::class, 'edit']);
Route::post('/update', [App\Http\Controllers\WebController::class, 'update']);
Route::get('/dashboard/{id}', [App\Http\Controllers\WebController::class, 'destroy']);
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::post('/postlogin', [App\Http\Controllers\LoginController::class, 'sLogin'])->name('sLogin');
Route::get('logout', [App\Http\Controllers\LoginController::class, 'keluar'])->name('keluar');