<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/daftar_mahasiswa', 'App\Http\Controllers\MahasiswaController@index');
//Route::get('/daftar_mahasiswa', [MahasiswaController::class,'index']);

//Route::post('/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);
//Route::get('/detail_mahasiswa/daftar_kekayaan', [MahasiswaController::class, 'daftar_kekayaan'])->name('one');

// Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaController::class, 'detail_mhs']);

//Route::view('/daftar_mahasiswa', 'daftar_mahasiswa');

Route::get('/admin/dashboard', [AdminController::class, 'index']);
Route::get('/admin/postingan', [AdminController::class, 'show_postingan']);
Route::get('/admin/arsip', [AdminController::class, 'show_arsip']);
Route::get('/admin/about_us', [AdminController::class, 'show_about_us']);
Route::get('/admin/klien_kami', [AdminController::class, 'show_klien_kami']);
Route::get('/admin/portofolio', [AdminController::class, 'show_portofolio']);


