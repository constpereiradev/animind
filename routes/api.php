<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;

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

Route::controller(AnimeController::class)->group(function () {
    Route::get('/animes', 'index');
    Route::post('/anime/store', 'store');
    Route::get('/anime/{id}', 'show');
    Route::put('/anime/update/{id}', 'update');
    Route::delete('/anime/delete/{id}', 'destroy');
});