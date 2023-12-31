<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPelaporanKegiatan;
use App\Http\Controllers\AdminPermohonanDana;
use App\Http\Controllers\AdminSKTController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelaporanKegiatanController;
use App\Http\Controllers\PermohonanDanaController;
use App\Http\Controllers\SKTController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin']);
Route::post('/regis', [AuthController::class, 'postRegis']);
Route::get('/logout', [AuthController::class, 'logout']);


Route::group(['middleware' => ['auth', 'Roles:admin']], function () {

    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');


    Route::group(['prefix' => 'permohonan-skt'], function () {
        Route::get('/ormas-terdaftar', [AdminSKTController::class, 'indexOrmasTerdaftar'])->name('permohonan-skt.ormas');
        Route::get('/ormas-terdaftar/detail/{id}', [AdminSKTController::class, 'detailOrmasTerdaftar'])->name('permohonan-skt.ormas');

        Route::get('/verifikasi', [AdminSKTController::class, 'indexVerifikasi'])->name('permohonan-skt.verifikasi');
        Route::get('/verifikasi/detail/{id}', [AdminSKTController::class, 'detailVerifikasi'])->name('permohonan-skt.verifikasi');

        Route::get('/menunggu', [AdminSKTController::class, 'indexMenunggu'])->name('permohonan-skt.menunggu');
        Route::get('/menunggu/detail/{id}', [AdminSKTController::class, 'detailMenunggu'])->name('permohonan-skt.menunggu');

        Route::delete('/destroy/{id}', [AdminSKTController::class, 'destroy']);
        // Aksi verifikasi tolak
        Route::post('/verifikasi/tolak/{id}', [AdminSKTController::class, 'verifikasiTolak'])
            ->name('permohonan-skt.verifikasi.tolak');
        // Aksi verifikasi terima
        Route::get('/verifikasi/terima/{id}', [AdminSKTController::class, 'verifikasiTerima'])
            ->name('permohonan-skt.verifikasi.terima');

        Route::post('/skt/{id}', [AdminSKTController::class, 'skt']);
    });


    Route::group(['prefix' => 'permohonan-dana'], function () {
        Route::get('/ormas-pemohon', [AdminPermohonanDana::class, 'indexOrmasPemohon'])->name('permohonan-dana.dana');
        Route::get('/ormas-pemohon/detail/{id}', [AdminPermohonanDana::class, 'detailOrmasPemohon'])->name('permohonan-dana.dana');

        Route::get('/verifikasi', [AdminPermohonanDana::class, 'indexVerifikasi'])->name('permohonan-dana.verifikasi');
        Route::get('/verifikasi/detail/{id}', [AdminPermohonanDana::class, 'detailVerifikasi'])->name('permohonan-dana.verifikasi');

        Route::get('/menunggu', [AdminPermohonanDana::class, 'indexMenunggu'])->name('permohonan-dana.menunggu');
        Route::get('/menunggu/detail/{id}', [AdminPermohonanDana::class, 'detailMenunggu'])->name('permohonan-dana.menunggu');

        Route::delete('/destroy/{id}', [AdminPermohonanDana::class, 'destroy']);

        // Aksi verifikasi tolak
        Route::post('/verifikasi/tolak/{id}', [AdminPermohonanDana::class, 'verifikasiTolak'])
            ->name('permohonan-dana.verifikasi.tolak');
        // Aksi verifikasi terima
        Route::get('/verifikasi/terima/{id}', [AdminPermohonanDana::class, 'verifikasiTerima'])
            ->name('permohonan-dana.verifikasi.terima');

        Route::post('/sp2p/{id}', [AdminPermohonanDana::class, 'sp2p']);
    });

    Route::group(['prefix' => 'pelaporan-kegiatan'], function () {
        Route::get('/laporan-ormas', [AdminPelaporanKegiatan::class, 'indexOrmasPemohon'])->name('pelaporan-kegiatan.laporan');
        Route::get('/laporan-ormas/detail/{id}', [AdminPelaporanKegiatan::class, 'detailOrmasPemohon'])->name('pelaporan-kegiatan.laporan');

        Route::get('/verifikasi', [AdminPelaporanKegiatan::class, 'indexVerifikasi'])->name('pelaporan-kegiatan.verifikasi');
        Route::get('/verifikasi/detail/{id}', [AdminPelaporanKegiatan::class, 'detailVerifikasi'])->name('pelaporan-kegiatan.verifikasi');

        Route::delete('/destroy/{id}', [AdminPelaporanKegiatan::class, 'destroy']);

        // Aksi verifikasi tolak
        Route::post('/verifikasi/tolak/{id}', [AdminPelaporanKegiatan::class, 'verifikasiTolak'])
            ->name('pelaporan-kegiatan.verifikasi.tolak');
        // Aksi verifikasi terima
        Route::get('/verifikasi/terima/{id}', [AdminPelaporanKegiatan::class, 'verifikasiTerima'])
            ->name('pelaporan-kegiatan.verifikasi.terima');
    });
});


Route::group(['middleware' => ['auth', 'Roles:ormas']], function () {
    Route::group(['prefix' => 'dashboard-ormas'], function () {
        Route::get('/', [SKTController::class, 'index']);
        Route::get('/permohonan-skt', [SKTController::class, 'create']);
        Route::post('/permohonan-skt/store', [SKTController::class, 'store']);

        Route::get('/status-skt', [SKTController::class, 'statusSkt'])->name('dashboard-ormas.status');
        Route::get('/keorganisasian', [SKTController::class, 'keorganisasian'])->name('dashboard-ormas.keorganisasian');
        Route::get('/kepengurusan', [SKTController::class, 'kepengurusan'])->name('dashboard-ormas.kepengurusan');
        Route::get('/dokumen', [SKTController::class, 'dokumen'])->name('dashboard-ormas.dokumen');
    });


    Route::group(['prefix' => 'permohonan-dana'], function () {
        Route::get('/index', [PermohonanDanaController::class, 'index']);
        Route::get('/create', [PermohonanDanaController::class, 'create']);
        Route::post('/store', [PermohonanDanaController::class, 'store']);
        Route::get('/detail/{id}', [PermohonanDanaController::class, 'show']);
    });

    Route::group(['prefix' => 'pelaporan-kegiatan'], function () {
        Route::get('/index', [PelaporanKegiatanController::class, 'index']);
        Route::get('/create', [PelaporanKegiatanController::class, 'create']);
        Route::post('/store', [PelaporanKegiatanController::class, 'store']);
        Route::get('/detail/{id}', [PelaporanKegiatanController::class, 'show']);
    });
});