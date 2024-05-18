<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MenuController;


    
Route::get('/', [ProductController::class, 'index']);


Route::get("/products", [ProductController::class, 'index']);
Route::get("/menu", [MenuController::class, 'index']);
Route::get("/menu/add", [MenuController::class, 'menu_add']);
Route::post("/menu/add/process", [MenuController::class, 'menu_add_process']);
Route::get("/menu/update/{products}", [MenuController::class, 'menu_update']);
Route::post("/menu/update/process", [MenuController::class, 'menu_update_process']);
Route::get("/menu/delete/{products}", [MenuController::class, 'menu_delete']);

