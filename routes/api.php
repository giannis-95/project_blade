<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\AverageApiController;

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

//users
Route::get('/users',                   [UserApiController::class, 'index']);
Route::get('/{id}/show',               [UserApiController::class, 'show']);
Route::post('/insert',                 [UserApiController::class, 'store']);
Route::put('/{id}/update',             [UserApiController::class, 'update']);
Route::delete('/{id}/delete',          [UserApiController::class, 'destroy']);


//averages
Route::get('/averages',                 [AverageApiController::class, 'index']);
Route::get('/{id}/show',                [AverageApiController::class, 'show']);
Route::post('/create',                  [AverageApiController::class, 'create']);
Route::put('/{id}/update',              [AverageApiController::class, 'update']);
Route::delete('/{id}/delete',           [AverageApiController::class, 'delete']);
