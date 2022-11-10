<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CalonGuruController;

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



Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'registerPost']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->controller(CalonGuruController::class)->group(function () {
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/profile/edit', 'editProfile')->name('editProfile');
    Route::post('/profile/edit', 'postProfile');
    Route::get('/surat-surat', 'suratSurat')->name('surat');
    Route::post('/surat-surat', 'uploadSurat');
    Route::get('/data-diri', 'dataDiri')->name('dataDiri');
    Route::post('/data-diri', 'postDataDiri');
});
Route::get('/', function () {
    return view('welcome');
});
