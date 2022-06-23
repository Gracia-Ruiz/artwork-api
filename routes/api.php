<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtworkController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* api crud routes */
Route::get('/index', [ArtworkController::class, 'index']);
Route::post('/store', [ArtworkController::class, 'store']);
Route::patch('/edit/{id}', [ArtworkController::class, 'edit']);
Route::post('/update/{id}', [ArtworkController::class, 'update']);
Route::delete('/destroy/{id}', [ArtworkController::class, 'destroy']);



