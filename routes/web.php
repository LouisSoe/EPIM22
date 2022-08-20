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
Route::get('/profile', function () {
    return view('user.userprofile');
})->name('profile');
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/detail/{id}', [eskul::class,'detail'])->name('detail');
Route::get('/testrafly', function () {
    return view('test.testfront');
});
Route::resource('ekstrakurikuler', eskul::class);
Route::get('datapendaftaran', [DaftarController::class, 'datapendaftaran'])->name('datapendaftaran');

Route::controller(DaftarController::class)->group(function () {
    Route::get('Pendaftaran/{id}','index')->name('Pendaftaran.edit');
    Route::post('Pendafataran', 'store')->name('Pendaftaran.store');
    Route::put('Pendaftaran/delete/{id}','destroy')->name('Pendaftaran.destroy');
});
Route::controller(dataallsiswa::class)->group(function () {
 Route::get('datasiswa','view')->name('detailall.siswa');
});
