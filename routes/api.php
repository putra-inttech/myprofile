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

Route::apiResource('/profile', App\Http\Controllers\Api\ProfileController::class);
Route::apiResource('/pendidikan', App\Http\Controllers\Api\PendidikanController::class);
Route::apiResource('/organisasi', App\Http\Controllers\Api\OrganisasiController::class);
Route::apiResource('/pengalamankerja', App\Http\Controllers\Api\PengalamanController::class);
Route::apiResource('/pemograman', App\Http\Controllers\Api\Ms_PemogramanController::class);
Route::apiResource('/projek', App\Http\Controllers\Api\ProjekController::class);