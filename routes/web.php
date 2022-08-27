<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\eskul;
use App\Http\Resources\Ekstrakurikuler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataallsiswa;
use App\Http\Controllers\requesthapusdata;


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

// Route admin wajib login
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('auth','admin');
Route::resource('ekstrakurikuler', eskul::class)->middleware('auth','admin');
Route::get('datapendaftaran', [DaftarController::class,'datapendaftaran'])->name('datapendaftaran')->middleware('auth','admin');

//route wajib login
Route::middleware(['auth'])->group(function () {
   Route::get('/profile', function () {
    return view('user.userprofile');
       })->name('profile');
    Route::controller(DaftarController::class)->group(function () {
    Route::get('Pendaftaran/{id}','index')->name('Pendaftaran.edit');
    Route::post('Pendafataran/{id}', 'store')->name('Pendaftaran.store');
    Route::put('Pendaftaran/delete/{id}','destroy')->name('Pendaftaran.destroy');
      });
    Route::controller(requesthapusdata::class)->group(function () {
          Route::get('Keluar Eskul/{id}','index')->name('request.eskul');
          Route::post('Keluar Eskul','store')->name('request.store');

          Route::get('DataPenghapusan','admin')->name('admin.page');
           Route::delete('DataPenghapusan/{id}','destroy')->name('request.destroy');
      });
});

// Route Tanpa Login
Route::get('/', [eskul::class, 'view'])->name('homepage');
Route::get('/detail/{id}', [eskul::class,'detail'])->name('detail');
Route::controller(dataallsiswa::class)->group(function () {
 Route::get('datasiswa','view')->name('detailall.siswa');
 Route::get('getdatasiswa','getdata')->name('detailall.getdata');
});


