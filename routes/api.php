<?php

use App\Http\Controllers\CollectionParfumeController;
use App\Http\Controllers\ParfumeController;
use App\Http\Controllers\UserController;
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


Route::resource('parfumes', ParfumeController::class)->only(['show', 'index']);

Route::get('/collections/{id}/parfumes', [CollectionParfumeController::class, 'index']);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return auth()->user();
    });
    Route::put('/update', [UserController::class, 'update']);
    Route::resource('parfumes', ParfumeController::class)->only(['update', 'store', 'destroy']);
    Route::post('/logout',  [UserController::class, 'logout']);
});
