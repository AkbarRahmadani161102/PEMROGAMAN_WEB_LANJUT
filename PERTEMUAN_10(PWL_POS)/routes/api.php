<?php

use App\Http\Controllers\Api\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\MUserController;
use App\Http\Controllers\Api\MKategoriController;
use App\Http\Controllers\Api\MBarangController;

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


Route::post('/register', RegisterController::class)->name('register');
Route::post('/login', LoginController::class)->name('login');
Route::post('/logout', LogoutController::class)->name('logout');

Route::get('/levels', [LevelController::class, 'index']);
Route::post('/levels', [LevelController::class, 'store']);
Route::get('/levels/{level}', [LevelController::class, 'show']);
Route::put('/levels/{level}', [LevelController::class, 'update']);
Route::delete('/levels/{level}', [LevelController::class, 'destroy']);

Route::get('/m_user', [MUserController::class, 'index']);
Route::post('/m_user', [MUserController::class, 'store']);
Route::get('/m_user/{m_user}', [MUserController::class, 'show']);
Route::put('/m_user/{m_user}', [MUserController::class, 'update']);
Route::delete('/m_user/{m_user}', [MUserController::class, 'destroy']);

Route::get('/m_kategori', [MKategoriController::class, 'index']);
Route::post('/m_kategori', [MKategoriController::class, 'store']);
Route::get('/m_kategori/{m_kategori}', [MKategoriController::class, 'show']);
Route::put('/m_kategori/{m_kategori}', [MKategoriController::class, 'update']);
Route::delete('/m_kategori/{m_kategori}', [MKategoriController::class, 'destroy']);

Route::get('/m_barang', [MBarangController::class, 'index']);
Route::post('/m_barang', [MBarangController::class, 'store']);
Route::get('/m_barang/{m_barang}', [MBarangController::class, 'show']);
Route::put('/m_barang/{m_barang}', [MBarangController::class, 'update']);
Route::delete('/m_barang/{m_barang}', [MBarangController::class, 'destroy']);
Route::middleware('auth:api')->get('/user', function(Request $request){
    return $request->user();
});