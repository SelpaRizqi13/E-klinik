<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TindakanController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PoliController;

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

// Route::get('/', function () {
//     return view('pages.login.login');
// });

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    
    Route::resource('login', LoginController::class);
    Route::resource('register', RegisterController::class);
});
    
    Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('pegawai', PegawaiController::class);
    Route::resource('tindakan', TindakanController::class);
    Route::resource('obat', ObatController::class);
    Route::resource('poli', PoliController::class);
    Route::resource('pasien', PasienController::class);
    Route::resource('tagihan', TagihanController::class);
    Route::resource('wilayah', WilayahController::class);
    Route::resource('dokter', DokterController::class);
    Route::resource('pendaftaran', PendaftaranController::class);

    //hapus data
    Route::get('delete_user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('delete_pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');
    Route::get('delete_tindakan/{id}', [TindakanController::class, 'destroy'])->name('tindakan.destroy');
    Route::get('delete_obat/{id}', [ObatController::class, 'destroy'])->name('obat.destroy');
    Route::get('delete_pasien/{id}', [PasienController::class, 'destroy'])->name('pasien.destroy');
    Route::get('delete_dokter/{id}', [DokterController::class, 'destroy'])->name('dokter.destroy');
    Route::get('delete_poli/{id}', [PoliController::class, 'destroy'])->name('poli.destroy');

    //logout
    Route::post('/logout', [LoginController::class, 'logout']);
});