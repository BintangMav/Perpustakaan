<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;



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
    Route::get('/', [LoginController::class,'index']);
    Route::get('/login', [LoginController::class,'index'])->name('login-admin');
    Route::post('/PostLogin', [LoginController::class,'login']);
    Route::get('/logout', [LoginController::class,'logout']);

Route::middleware(['auth','level:admin,petugas'])->group(function(){
    Route::get('/dashboard', [DashboardController::class,'index']);

    Route::get('/user', [UserController::class,'index']);
    Route::get('/user/create', [UserController::class,'create']);
    Route::post('/user/simpan', [UserController::class,'store']);
    Route::get('/user/{id}/edit', [UserController::class,'show']);
    Route::post('/user/{id}/update', [UserController::class,'update']);
    Route::get('/user/{id}/hapus', [UserController::class,'destroy']);

    Route::get('/buku', [BukuController::class,'index']);
    Route::get('/buku/create', [BukuController::class,'create']);
    Route::post('/buku/simpan', [BukuController::class,'store']);
    Route::get('/buku/{id}/edit', [BukuController::class,'show']);
    Route::post('/buku/{id}/update', [BukuController::class,'update']);
    Route::get('/buku/{id}/hapus', [BukuController::class,'destroy']);

    Route::get('/member', [MemberController::class,'index']);
    Route::get('/member/create', [MemberController::class,'create']);
    Route::post('/member/simpan', [MemberController::class,'store']);
    Route::get('/member/{id}/edit', [MemberController::class,'show']);
    Route::post('/member/{id}/update', [MemberController::class,'update']);
    Route::get('/member/{id}/hapus', [MemberController::class,'destroy']);

    Route::get('/peminjaman', [PeminjamanController::class,'index']);
    Route::get('/peminjaman/create', [PeminjamanController::class,'create']);
    Route::post('/peminjaman/simpan', [PeminjamanController::class,'store']);
    Route::get('/peminjaman/{id}/edit', [PeminjamanController::class,'show']);
    Route::post('/peminjaman/{id}/update', [PeminjamanController::class,'update']);
    Route::get('/peminjaman/{id}/hapus', [PeminjamanController::class,'destroy']);

    Route::get('/penulis', [PenulisController::class,'index']);
    Route::get('/penulis/create', [PenulisController::class,'create']);
    Route::post('/penulis/simpan', [PenulisController::class,'store']);
    Route::get('/penulis/{id}/edit', [PenulisController::class,'show']);
    Route::post('/penulis/{id}/update', [PenulisController::class,'update']);
    Route::get('/penulis/{id}/hapus', [PenulisController::class,'destroy']);

    Route::get('/kategori', [KategoriController::class,'index']);
    Route::get('/kategori/create', [KategoriController::class,'create']);
    Route::post('/kategori/simpan', [KategoriController::class,'store']);
    Route::get('/kategori/{id}/edit', [KategoriController::class,'show']);
    Route::post('/kategori/{id}/update', [KategoriController::class,'update']);
    Route::get('/kategori/{id}/hapus', [KategoriController::class,'destroy']);
});