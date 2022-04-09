<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\petugasKeluarController;
use App\Http\Controllers\petugasMasukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// halaman admin
Route::get('/admin',[AdminController::class,'halamanAdmin'])->name('halamanAdmin');
Route::get('/login', [AdminController::class,'halamanLogin'])->name('halamanLogin');
Route::post('/loginAdmin',[AdminController::class,'postLogin'])->name('postLogin');

// halaman petugas masuk
Route::get('/petugasMasuk',);
Route::get('/loginPetugasMasuk',[petugasMasukController::class,'pageLoginPetugasM']);
Route::post('/loginPetugasMasuk',);

// halamn petugas Keluar
Route::get('/petugasKeluar',);
Route::get('/loginPetugasKeluar',[petugasKeluarController::class,'pageLoginPetugask']);
Route::post('/loginPetugasKeluar',);