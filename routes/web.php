<?php

use App\Http\Controllers\EkstrakurikulerController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('livewire', function(){
    return view('livewire');
});


Route::resource('ekstrakurikuler', EkstrakurikulerController::class);

Route::view('dashboard', 'admin.dashboard')->name('dashboard');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('index');
});
