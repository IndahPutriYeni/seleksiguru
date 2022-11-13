<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MethodeController;
use App\Http\Controllers\KategoriController;
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



// Route::get('/login', [LoginController::class, 'show'])->name('login');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::get('/register', [LoginController::class, 'register'])->name('register');
// Route::post('/register', [LoginController::class, 'registerPost']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';
Route::middleware(['auth', 'guru'])->controller(CalonGuruController::class)->group(function () {
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/dashboard', 'profile')->name('profile');
    Route::post('/profile/edit', 'editProfile')->name('editProfile');
    Route::get('/surat-surat', 'suratSurat')->name('surat');
    Route::post('/surat-surat', 'uploadSurat');
    Route::get('/data-diri', 'dataDiri')->name('dataDiri');
    Route::post('/data-diri', 'postDataDiri');
    Route::get('/profil-sekolah', 'profileSekolah')->name('profile-sekolah');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('', [AdminController::class, 'index'])->name('index');
    Route::get('/user', [AdminController::class, 'user'])->name('user');
    Route::get('/user/add', [AdminController::class, 'addUser'])->name('addUser');
    Route::post('/user/add', [AdminController::class, 'addUserPost'])->name('postUser');
    Route::get('/user/{id}/edit', [AdminController::class, 'editUser'])->name('editUser');
    Route::put('/user/{id}/edit', [AdminController::class, 'putUser'])->name('putUser');
    Route::delete('/user/{id}/delete', [AdminController::class, 'deleteUser'])->name('putUser');



    
    Route::controller(KategoriController::class)->group(function(){
        Route::get('kategori', 'listGuru')->name('kategori');
        Route::post('kategori', 'addKategori')->name('addKategori');
        Route::put('kategori/{id}', 'editKategori')->name('kategoriEdit');
        Route::delete('kategori/{id}', 'hapusKategori')->name('deleteKategori');
    });

    Route::controller(GuruController::class)->group(function(){
        Route::get('guru', 'listGuru')->name('guru.index');
        Route::get('guru/{id}', 'showGuru')->name('guru.nilai');
        Route::get('guru/{id}/surat', 'showSurat')->name('guru.surat');
        Route::post('guru/{id}', 'addNilai')->name('guru.addNilai');
        Route::put('guru/{id}', 'editGuru')->name('guru.edit');
        Route::delete('guru/{id}', 'hapusGuru')->name('guru.delete');
    });

    Route::controller(MethodeController::class)->group(function(){
        Route::get('ahp', 'showAhp')->name('ahp');
        Route::get('topsis', 'showTopsis')->name('topsis');
        Route::get('copeland', 'showCopeland')->name('copeland');
    });
    
});


Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('/perjanjian', function () {
    return view('calonGuru.perjanjian');
})->name('perjanjian');
