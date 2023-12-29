<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TagController;
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

Route::controller(BlogController::class)->group(function (){
    Route::get('blogs',[BlogController::class,'index']);
    Route::get('blogs/{blogs}',[BlogController::class,'show']);
    Route::post('blogs/store',[BlogController::class,'store']);
});

Route::post('tag/store',[TagController::class, '__invoke']);


