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
Route::get('/', function(){
    return view('warning');
});

// halaman admin
Route::get('/admin',[AdminController::class,'halamanAdmin']);
Route::get('/login', [AdminController::class,'halamanLogin'])->name('login');
Route::post('/loginAdmin',[AdminController::class,'postLogin'])->name('postLogin');
Route::get('/logout',[AdminController::class,'logout'])->name('logout');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/admin',[AdminController::class,'halamanAdmin']);
});

// halaman petugas masuk
Route::get('/petugasMasuk',[petugasMasukController::class,'pageHome'])->name('pageHome');
Route::get('/loginPetugasMasuk',[petugasMasukController::class,'pageLoginPetugasM']);
Route::post('/loginPetugasMasuk',[petugasMasukController::class,'postLogin'])->name('postLogin');
Route::post('/logout',[petugasMasukController::class,'logout'])->name('logout');


// halamn petugas Keluar
Route::get('/petugasKeluar',[petugasKeluarController::class,'pageHome']);
Route::get('/loginPetugasKeluar',[petugasKeluarController::class,'pageLoginPetugask']);
Route::post('/loginPetugasKeluar',[petugasKeluarController::class,'postLogin']);
Route::post('/logout',[petugasKeluarController::class,'logout'])->name('logout');

// URL crud
  Route::get('/laporanP', [AdminController::class,'user']);
  Route::get('laporanP/tambah', [AdminController::class,'tambah'])->name('tambah');
  Route::get('user/add_user', [AdminController::class,'add'])->name('add_user');
  Route::get('user/delete/{id}',[AdminController::class,'delete'])->name('delete');
  Route::get('user/edit/{id}',[AdminController::class,'editUser'])->name('edit_user');
  Route::get('user/update',[AdminController::class,'update data'])->name('edit_user_aksi');