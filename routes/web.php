<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgamaController;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\DokumenController;
use App\Http\Controllers\JnkController;
use App\Http\Controllers\kKController;
use App\Http\Controllers\KewarganegaraanController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PerkawinanController;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GrafikController;
use App\Http\Controllers\PembuatanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\VisiController;

use App\Http\Controllers\TambahagamaController;

// Rute untuk halaman home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk halaman contact
Route::get('/admin', action: [AdminController::class, 'index'])->name('admin');
Route::get('/agama', [AgamaController::class, 'index'])->name('agama');
Route::get('/desa', action: [DesaController::class, 'index'])->name('desa');
Route::get('/dokumen', action: [DokumenController::class, 'index'])->name('dokumen');
Route::get(uri: '/jnk', action: [JnkController::class, 'index'])->name(name: 'jnk');
Route::get(uri: '/kk', action: [KkController::class, 'index'])->name(name: 'kk');
Route::get(uri: '/kewarganegaraan', action: [KewarganegaraanController::class, 'index'])->name(name: 'kewarganegaraan');
Route::get(uri: '/layanan', action: [LayananController::class, 'index'])->name(name: 'layanan');
Route::get(uri: '/pekerjaan', action: [PekerjaanController::class, 'index'])->name(name: 'pekerjaan');
Route::get(uri: '/pengguna', action: [PenggunaController::class, 'index'])->name(name: 'pengguna');
Route::get(uri: '/pendidikan', action: [PendidikanController::class, 'index'])->name(name: 'pendidikan');
Route::get(uri: '/penduduk', action: [PendudukController::class, 'index'])->name(name: 'penduduk');
Route::get(uri: '/roles', action: [RolesController::class, 'index'])->name(name: 'roles');
Route::get(uri: '/status', action: [StatusController::class, 'index'])->name(name: 'status');
Route::get(uri: '/perkawinan', action: [PerkawinanController::class, 'index'])->name(name: 'perkawinan');


Route::get('/informasi', action: [InformasiController::class, 'index'])->name('informasi');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/grafik', [GrafikController::class, 'index'])->name('grafik');
Route::get('/pembuatan', [PembuatanController::class, 'index'])->name('pembuatan');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/visi', [VisiController::class, 'index'])->name('visi');

Route::get('/tambah', action:[TambahagamaController::class, 'index'])->name('tambah');