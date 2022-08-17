<?php

use App\Http\Controllers\daftarController;
use App\Http\Controllers\eskul;
use App\Http\Resources\Ekstrakurikuler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataallsiswa;
use App\Http\Controllers\daftar;


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

Route::get('/', [eskul::class, 'view'])->name('homepage');
// route::redirect('/dashboard','/dashboa');
Route::get('/profile', function () {
    return view('user.userprofile');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/detail/{id}', [eskul::class,'detail'])->name('detail');
Route::get('/testrafly', function () {
    return view('test.testfront');
});
Route::resource('ekstrakurikuler', eskul::class);

// Route::get('daftar', [DaftarController::class,'daftar'])->name('daftar');
// Route::get('datapendaftaran', [DaftarController::class, 'datapendaftaran'])->name('datapendaftaran');
// Route::resource('detail', dataallsiswa::class);
// Route::resource('Pendaftaran', DaftarController::class);

// Route::controller(DaftarController::class)->group(function () {
//     // Route::get('Pendaftaran','index')->name('Pendaftaran.index');
//     Route::get('Pendaftaran/{id}','edit')->name('Pendaftaran.edit');
//     Route::post('Pendaftaran','store')->name('Pendaftaran.store');
//     Route::put('Pendaftaran/{id}','update')->name('Pendaftaran.update');

//    });
Route::controller(daftarcontroller::class)->group(function () {
    Route::get('Pendaftaran/{id}','index')->name('Pendaftaran.edit');
    Route::post('Pendaftaran','store')->name('Pendaftaran.store');
});
Route::controller(dataallsiswa::class)->group(function () {
 Route::get('data siswa','view')->name('detailall.siswa');
});
