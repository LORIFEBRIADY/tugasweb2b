<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UjianController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', function () {
    //return view('universitas.mahasiswa');
    $nama = 'Lori';
    $nilai = 90;
    return view('universitas.mahasiswa', compact('nama', 'nilai'));
});

Route::get('/halo', [HelloController::class, 'index']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/pesan', function () {
    return view('greeting', ['pesan' => 'Selamat Belajar Laravel Lori Blade']);
});

Route::get('/siswa', [SiswaController::class, 'index']);

Route::get('/dashboard/profile', [UserController::class, 'profile']);

Route::get('/ujian', [UjianController::class, 'index']);