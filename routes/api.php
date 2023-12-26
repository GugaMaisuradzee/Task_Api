<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(BlogController::class)->group(function () {
    Route::get('blogs', 'index');
    Route::get('blogs/{blogs}', 'show');
    Route::post('blogs/store', 'store');
});

Route::post('tag/store', TagController::class);


