<?php

use App\Http\Controllers\eskul;
use App\Http\Resources\Ekstrakurikuler;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [eskul::class, 'view']);
// route::redirect('/dashboard','/dashboa');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/detail', function () {
    return view('user.detail');
});
Route::resource('ekstrakurikuler', eskul::class);

