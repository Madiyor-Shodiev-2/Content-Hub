<?php

use App\Http\Controllers\Api\v1\AuthorsController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::middleware('auth:sanctum')->group(function () {
// });

Route::prefix('v1')->group(function () {
    Route::apiResource('authors-api', AuthorsController::class);
    Route::apiResource('/categories-api', CategoryController::class);
});
