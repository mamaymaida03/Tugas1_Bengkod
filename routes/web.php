<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/pasien', [PasienController::class, 'index'])->name('dashboardPasien')->middleware('role:pasien', 'auth');
Route::get('/pasien/periksa', [PasienController::class, 'showPeriksa'])->name('periksaPasien')->middleware('role:pasien', 'auth');
Route::post('/pasien/periksa', [PasienController::class, 'create'])->name('periksaCreate')->middleware('role:pasien', 'auth');
Route::get('/pasien/riwayat', [PasienController::class, 'showRiwayat'])->name('riwayatPasien')->middleware('role:pasien', 'auth');

Route::get('/dokter', [DokterController::class, 'index'])->name('dashboardDokter')->middleware('role:dokter', 'auth');
Route::get('/dokter/memeriksa', [DokterController::class, 'showMemeriksa'])->name('memeriksaDokter')->middleware('role:dokter', 'auth');
Route::get('/dokter/memeriksa/{id}/edit', [DokterController::class, 'editMemeriksa'])->name('memeriksaEdit')->middleware('role:dokter', 'auth');
Route::put('/dokter/memeriksa/{id}/edit', [DokterController::class, 'update'])->name('memeriksaUpdate')->middleware('role:dokter', 'auth');
Route::get('/dokter/obat', [DokterController::class, 'showObat'])->name('obatDokter')->middleware('role:dokter', 'auth');
Route::post('/dokter/obat', [DokterController::class, 'createObat'])->name('obatCreate')->middleware('role:dokter', 'auth');
Route::put('/dokter/obat/{id}/edit', [DokterController::class, 'updateObat'])->name('obatUpdate')->middleware('role:dokter', 'auth');
Route::get('/dokter/obat/{id}/edit', [DokterController::class, 'editObat'])->name('obatEdit')->middleware('role:dokter', 'auth');
Route::delete('/dokter/obat/{id}', [DokterController::class, 'deleteObat'])->name('obatDelete')->middleware('role:dokter', 'auth');