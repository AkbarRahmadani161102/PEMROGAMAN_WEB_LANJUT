<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\VisualizationController;

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

Route::get('/', [WelcomeController::class, 'index'])->name('home.index');

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');


Route::group(['middleware' => ['auth']], function() {
    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::resource('manager', ManagerController::class);
    });
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']);
    Route::post('/list', [LevelController::class, 'list']);
    Route::get('/create', [LevelController::class, 'create']);
    Route::post('/', [LevelController::class, 'store']);
    Route::get('/{id}', [LevelController::class, 'show']);
    Route::get('/{id}/edit', [LevelController::class, 'edit']);
    Route::put('/{id}', [LevelController::class, 'update']);
    Route::delete('/{id}', [LevelController::class, 'destroy']);
});

Route::group(['prefix' => 'category'], function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::post('/list', [CategoryController::class, 'list']);
    Route::get('/create', [CategoryController::class, 'create']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::get('/{id}', [CategoryController::class, 'show']);
    Route::get('/{id}/edit', [CategoryController::class, 'edit']);
    Route::put('/{id}', [CategoryController::class, 'update']);
    Route::delete('/{id}', [CategoryController::class, 'destroy']);
});

Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::post('/list', [ProductController::class, 'list']);
    Route::get('/create', [ProductController::class, 'create']);
    Route::post('/', [ProductController::class, 'store']);
    Route::get('/{id}', [ProductController::class, 'show']);
    Route::get('/{id}/edit', [ProductController::class, 'edit']);
    Route::put('/{id}', [ProductController::class, 'update']);
    Route::delete('/{id}', [ProductController::class, 'destroy']);
});

Route::group(['prefix' => 'stok'], function () {
    Route::get('/', [StokController::class, 'index'])->name('stok');
    Route::get('/list', [StokController::class, 'list']);
    Route::get('/create', [StokController::class, 'create']);
    Route::post('/', [StokController::class, 'store']);
    Route::get('/{id}', [StokController::class, 'show']);
    Route::get('/{id}/edit', [StokController::class, 'edit']);
    Route::put('/{id}', [StokController::class, 'update']);
    Route::delete('/{id}', [StokController::class, 'destroy']);
});

Route::group(['prefix' => 'penjualan'], function () {
    Route::get('/', [PenjualanController::class, 'index']);
    Route::post('/list', [PenjualanController::class, 'list']);
    Route::get('/create', [PenjualanController::class, 'create']);
    Route::post('/', [PenjualanController::class, 'store']);
    Route::get('/{id}', [PenjualanController::class, 'show']);
    Route::get('/{id}/edit', [PenjualanController::class, 'edit']);
    Route::put('/{id}', [PenjualanController::class, 'update']);
    Route::delete('/{id}', [PenjualanController::class, 'destroy']);
});

Route::group(['prefix' => 'gambar'], function () {
    Route::get('/', [GambarController::class, 'index'])->name('gambar.index');
    Route::post('/list', [GambarController::class, 'list'])->name('gambar.list');
    Route::get('/create', [GambarController::class, 'create'])->name('gambar.create');
    Route::post('/', [GambarController::class, 'store'])->name('gambar.store');
    Route::get('/{id}', [GambarController::class, 'show'])->name('gambar.show');
    Route::get('/{id}/edit', [GambarController::class, 'edit'])->name('gambar.edit');
    Route::put('/{id}', [GambarController::class, 'update'])->name('gambar.update');
    Route::delete('/{id}', [GambarController::class, 'destroy'])->name('gambar.destroy');
});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/level', [LevelController::class, 'index']);

// Route::get('/kategori/create', [KategoriController::class, 'create']);
// Route::post('/kategori', [KategoriController::class, 'store']);


// Route::get('/kategori', [KategoriController::class, 'index']);
// Route::get('/kategori/create', [KategoriController::class, 'create']);
// Route::post('/kategori', [KategoriController::class, 'store']);
// Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);

// Route::post('/kategori/update/{id}', [KategoriController::class, 'update']);
// Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);


// Route::get('/user', [UserController::class, 'index']);
// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
// Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);