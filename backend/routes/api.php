<?php

use App\Http\Controllers\VideosController;
use App\Http\Controllers\ProfileController;
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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::prefix('videos')->group(function () {
    Route::get('', [VideosController::class, 'list']);
    Route::get('{id}', [VideosController::class,'info']);
    Route::post('', [VideosController::class,'create']);
});
Route::prefix('profile')->group(function () {
    Route::get('', [ProfileController::class, 'list']);
    Route::get('{id}', [ProfileController::class,'info']);
    Route::post('', [ProfileController::class,'create']);
});