<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ScategorieController;

Route::middleware('api')->group(function () {
Route::resource('categories', CategorieController::class);
});
Route::middleware('api')->group(function () {
    Route::resource('scategories', SategorieController::class);
    });
    
    Route::middleware('api')->group(function () {
        Route::resource('articles', ArticleController::class);
        });    

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
