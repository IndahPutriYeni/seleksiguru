<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalonGuruController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KepalaSekolah\AhpController as KSAhpController;
use App\Http\Controllers\KepalaSekolah\TopsisController as KSTopsisController;
use App\Http\Controllers\KepalaYayasan\AhpController as KYAhpController;
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

// Route::get('/login', [LoginController::class, 'show'])->name('login');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::get('/register', [LoginController::class, 'register'])->name('register');
// Route::post('/register', [LoginController::class, 'registerPost']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'guru'])->controller(CalonGuruController::class)->group(function () {
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/dashboard', 'profile')->name('dashboard');
    Route::post('/profile/edit', 'editProfile')->name('editProfile');
    Route::get('/surat-surat', 'suratSurat')->name('surat');
    Route::post('/surat-surat', 'uploadSurat');
    Route::get('/profil-sekolah', 'profileSekolah')->name('profile-sekolah');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('index');
    Route::get('/user', [AdminController::class, 'user'])->name('user');
    Route::get('/user/add', [AdminController::class, 'addUser'])->name('addUser');
    Route::post('/user/add', [AdminController::class, 'addUserPost'])->name('postUser');
    Route::get('/user/{id}', [AdminController::class, 'editUser'])->name('editUser');
    Route::put('/user/{id}', [AdminController::class, 'putUser'])->name('putUser');
    Route::delete('/user/{id}/delete', [AdminController::class, 'deleteUser'])->name('deleteUser');

    Route::controller(KategoriController::class)->group(function () {
        Route::get('kategori', 'listKategori')->name('kategori');
        Route::get('kategori/add', 'addKategori')->name('addKategori');
        Route::post('kategori/add', 'postKategori')->name('postKategori');
        Route::get('kategori/{id}', 'editKategori')->name('editKategori');
        Route::put('kategori/{id}', 'putKategori')->name('kategoriEdit');
        Route::delete('kategori/{id}', 'hapusKategori')->name('deleteKategori');
    });

    Route::controller(GuruController::class)->group(function () {
        Route::get('guru', 'listGuru')->name('guru.index');
        Route::get('guru/kepsek', 'nilaiGuruKepsek')->name('guru.kepsep');
        Route::get('guru/yayasan', 'nilaiGuruYayasan')->name('guru.yayasan');
        Route::get('guru/nilai', 'addMassNilai')->name('guru.add.mass');
        Route::get('guru/{id}/surat', 'showSurat')->name('guru.surat');
        Route::post('guru/{id}', 'addNilai')->name('guru.addNilai');
        Route::put('guru/{id}', 'editGuru')->name('guru.edit');
        Route::delete('guru/{id}', 'hapusGuru')->name('guru.delete');
    });

    Route::prefix('kepala-sekolah')
        ->as('kepalaSekolah.')
        ->group(function () {
            Route::controller(KSAhpController::class)
                ->group(function () {
                    Route::get('ahp', 'ahp')->name('ahp');
                    Route::get('ahp-perbandingan', 'ahpPerbandingan')->name('ahp.perbandingan');
                    Route::post('ahp', 'ahpProcess')->name('ahp.process');
                });

            Route::controller(KSTopsisController::class)
                ->group(function () {
                    Route::get('topsis', 'index')->name('topsis');
                });
        });

    Route::controller(KYAhpController::class)
        ->prefix('kepala-yayasan')
        ->as('kepalaYayasan.')
        ->group(function () {
            Route::get('ahp', 'ahp')->name('ahp');
            Route::get('ahp-perbandingan', 'ahpPerbandingan')->name('ahp.perbandingan');
            Route::post('ahp', 'ahpProcess')->name('ahp.process');
        });
});

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/perjanjian', function () {
    return view('calonGuru.perjanjian');
})->name('perjanjian');
