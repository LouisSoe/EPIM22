<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\eskul;
use App\Http\Resources\Ekstrakurikuler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataallsiswa;


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
Route::get('datapendaftaran', [DaftarController::class, 'datapendaftaran'])->name('datapendaftaran');

Route::controller(Daftarcontroller::class)->group(function () {
    Route::get('Pendaftaran/{id}','index')->name('Pendaftaran.index');
    Route::post('Pendaftaran','store')->name('Pendaftaran.store');
    Route::get('datapendaftaran','datapendaftaran')->name('datapendaftaran');
    Route::get('datapendaftaran','datapendaftaran')->name('datapendaftaran');
        Route::delete('datapendaftaran/{id}','destroy')->name('daftar.destroy');
    Route::get('datapendaftaran/{id}','show')->name('daftar.show');

});
Route::controller(dataallsiswa::class)->group(function () {
 Route::get('data siswa','view')->name('detailall.siswa');
});
