<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\petugasKeluarController;
use App\Http\Controllers\petugasMasukController;
use App\Http\Controllers\petugasRuangController;

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
// Route::get('/admin',[AdminController::class,'halamanAdmin']);
Route::get('/login', [AdminController::class,'halamanLogin'])->name('login');
Route::post('/loginAdmin',[AdminController::class,'postLogin'])->name('postLogin');
Route::get('/logout',[AdminController::class,'logout'])->name('logout');

// Route::group(['middleware'=>['auth']],function(){
//     Route::get('/admin',[AdminController::class,'halamanAdmin']);
// });
Route::get('/admin', [AdminController::class, 'halamanAdmin'])->name('AdminHome')->middleware('ceklevel');

// Route::group(['middleware'=>['auth']],function(){
//    Route::get('/petugasMasuk',[petugasMasukController::class,'pageHome']);
// });

// halaman petugas masuk
Route::get('/petugasMasuk',[petugasMasukController::class,'pageHome'])->name('pageHome');
Route::get('/petugasMasuk/add_stnk',[petugasMasukController::class,'add_stnk']);
Route::get('/petugasMasuk/tambah',[petugasMasukController::class,'tambah']);
// Route::post('/loginPetugasMasuk',[petugasMasukController::class,'postLogin'])->name('postLogin');
Route::post('/logout',[petugasMasukController::class,'logout'])->name('logout');


// halamn petugas Keluar
Route::get('/petugasKeluar',[petugasKeluarController::class,'pageHome']);
Route::get('/petugasKeluar/keluar',[petugasKeluarController::class,'data_keluar']);
Route::get('/petugasKeluar/edit/{id}/{tempat}',[petugasKeluarController::class,'keluar']);
Route::post('/logout',[petugasKeluarController::class,'logout'])->name('logout');

// halaman petugas Ruang
Route::get('/petugasRuang',[petugasRuangController::class,'pageRuang']);
Route::get('/pageEdit/{stnk}/{id_dp}',[petugasRuangController::class,'editParkir']);
Route::get('/pageEdit',[petugasRuangController::class,'pageEdit']);
Route::get('/editKendaran',[petugasRuangController::class,'edit_kendaraan']);

// URL crud
  Route::get('/laporanP', [AdminController::class,'user']);
  Route::get('laporanP/tambah', [AdminController::class,'tambah'])->name('tambah');
  Route::get('laporanP/add_user', [AdminController::class,'add_user'])->name('add_user');
  Route::get('/laporanP/delete/{id}',[AdminController::class,'delete'])->name('delete');
  Route::get('/laporanP/edit/{id}',[AdminController::class,'editUser'])->name('edit_user');
//   Route::get('user/update',[AdminController::class,'update data'])->name('edit_user_aksi');

  Route::get('/test',function(){
      return view("test");
  });