<?php

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

Route::get('/get_user', [\App\Http\Controllers\SubcountyController::class, 'getUser']);
Route::get('/get_sub_county_name', [\App\Http\Controllers\SubcountyController::class, 'getSubCountyName']);


Route::get('/get_user_sub_county', [\App\Http\Controllers\SubcountyController::class, 'getUserSubCounty']);
