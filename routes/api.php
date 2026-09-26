<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/
Route::get('users',[UserController::class, 'index']);
Route::post('users',[UserController::class, 'store']);
Route::get('users/{id}',[UserController::class,'show']);
Route::put('users/{id}',[UserController::class,'put']);
Route::delete('users/{id}',[UserController::class,'delete']);

Route::get('categories',[CategoryController::class,'index']);
Route::get('categories/{id}',[CategoryController::class,'show']);
Route::post('categories',[CategoryController::class,'store']);
Route::put('categories/{id}',[CategoryController::class,'put']);
Route::delete('categories/{id}',[CategoryController::class,'delete']);

Route::post('products',[ProductController::class,'store']);
Route::get('products',[ProductController::class,'index']);
Route::get('products/{id}',[ProductController::class,'show']);


