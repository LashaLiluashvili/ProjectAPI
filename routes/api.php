<?php

use App\Http\Controllers\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/posts',[ProductController::class, 'index']);

// Route::post('/post',[ProductController::class, 'store']);

// Route::get('/posts/{id}',[ProductController::class, 'show']);

// Route::put('/posts/{id}',[ProductController::class, 'update']);

// Route::delete('/posts/{id}',[ProductController::class, 'destroy']);

Route::apiResource('/products', 'App\Http\Controllers\ProductController');

Route::apiResource('/news', 'App\Http\Controllers\NewsController');