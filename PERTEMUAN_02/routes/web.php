<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/  

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::prefix('category')->group(function(){
    route::get('/food-beverage', [CategoryController::class, 'index']);
    route::get('/beauty-health', [CategoryController::class, 'beautyHealth']);
    route::get('/home-care', [CategoryController::class, 'homeCare']);
    route::get('/baby-kid', [CategoryController::class, 'babyKid']);
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'index']);

Route::get('/pos', [PosController::class, 'index']);