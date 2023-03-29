<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\GuruController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/siswa', function () {
    return view('siswa.index');
});
Route::get('/mapel', function () {
    return view('mapel.index');
});
Route::get('/guru', function () {
    return view('guru.index');
});
Route::get('/settings', function () {
    return view('auth.settings');
});

Auth::routes();

Route::resource('/siswa', SiswaController::class);
Route::resource('/mapel', MapelController::class);
Route::resource('/guru', GuruController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
