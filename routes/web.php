<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GenerasiCerdasController;
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


Route::get('/', [GenerasiCerdasController::class, 'beranda'])->name('dashboard.beranda');
Route::get('tentang-kami', [GenerasiCerdasController::class, 'tentangKami'])->name('dashboard.tentangkami');
Route::get('tentang-kami/history', [GenerasiCerdasController::class, 'history'])->name('dashboard.history');
Route::get('tentang-kami/visi-misi', [GenerasiCerdasController::class, 'visiMisi'])->name('dashboard.visimisi');
Route::get('tentang-kami/profile-founder', [GenerasiCerdasController::class, 'profileFounder'])->name('dashboard.profilefounder');

Route::get('program', [GenerasiCerdasController::class, 'program'])->name('dashboard.program');
Route::get('program/peta-dampak', [GenerasiCerdasController::class, 'petaDampak'])->name('dashboard.petadampak');

Route::get('relawan', [GenerasiCerdasController::class, 'relawan'])->name('dashboard.relawan');
Route::get('relawan/daftar', [GenerasiCerdasController::class, 'daftarRelawan'])->name('dashboard.daftarrelawan');
Route::get('relawan/registrasi', [GenerasiCerdasController::class, 'registrasi'])->name('dashboard.registrasi');

Route::get('partner', [GenerasiCerdasController::class, 'partner'])->name('dashboard.partner');
Route::get('partner/logo-pt-csr', [GenerasiCerdasController::class, 'logoPTCSR'])->name('dashboard.logoptcsr');
Route::get('partner/daftar-donatur', [GenerasiCerdasController::class, 'daftarDonatur'])->name('dashboard.daftardonatur');
Route::get('partner/count-dana', [GenerasiCerdasController::class, 'countDana'])->name('dashboard.countdana');

Route::get('hubungi-kami', [GenerasiCerdasController::class, 'hubungiKami'])->name('dashboard.hubungikami');



Route::post('/generasi-cerdas', [GenerasiCerdasController::class, 'store'])->name('generasi-cerdas.store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');


});
