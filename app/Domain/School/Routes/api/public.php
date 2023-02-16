<?php

use App\Domain\School\Http\Controllers\ProductController;
use App\Domain\School\Http\Controllers\RoomController;
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

Route::get('rooms', [RoomController::class, 'index']);
Route::get('rooms/{room}', [RoomController::class, 'show']);
Route::post('rooms', [RoomController::class, 'store']);
Route::put('rooms/{room}', [RoomController::class, 'put']);
Route::delete('rooms/{room}', [RoomController::class, 'destroy']);

Route::get('products', [ProductController::class, 'index']);
Route::get('products/{product}', [ProductController::class, 'show']);
Route::post('products', [ProductController::class, 'store']);
###CRUD_PLACEHOLDER###
