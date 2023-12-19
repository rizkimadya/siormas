<?php

use App\Http\Controllers\AdminController;
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

        Route::get('/ormas-terdaftar', [AdminController::class, 'indexOrmasTerdaftar'])->name('permohonan-skt.ormas');
        Route::get('/ormas-terdaftar/detail/{id}', [AdminController::class, 'detailOrmasTerdaftar'])->name('permohonan-skt.ormas');

        Route::get('/verifikasi', [AdminController::class, 'indexVerifikasi'])->name('permohonan-skt.verifikasi');
        Route::get('/verifikasi/detail/{id}', [AdminController::class, 'detailVerifikasi'])->name('permohonan-skt.verifikasi');

        Route::get('/menunggu', [AdminController::class, 'indexMenunggu'])->name('permohonan-skt.menunggu');
        Route::get('/menunggu/detail/{id}', [AdminController::class, 'detailMenunggu'])->name('permohonan-skt.menunggu');

        Route::delete('/destroy/{id}', [AdminController::class, 'destroy']);
    });

    // Aksi verifikasi tolak
    Route::get('/verifikasi/tolak/{id}', [AdminController::class, 'verifikasiTolak'])
        ->name('permohonan-skt.verifikasi.tolak');

    // Aksi verifikasi terima
    Route::get('/verifikasi/terima/{id}', [AdminController::class, 'verifikasiTerima'])
        ->name('permohonan-skt.verifikasi.terima');

    Route::group(['prefix' => 'permohonan-dana'], function () {

        Route::get('/ormas-pemohon', function () {
            return view('components.permohonan-dana.dana');
        })->name('permohonan-dana.dana');

        Route::get('/verifikasi', function () {
            return view('components.permohonan-dana.verifikasi');
        })->name('permohonan-dana.verifikasi');

        Route::get('/menunggu', function () {
            return view('components.permohonan-dana.menunggu');
        })->name('permohonan-dana.menunggu');
    });

    Route::group(['prefix' => 'pelaporan-kegiatan'], function () {

        Route::get('/laporan-ormas', function () {
            return view('components.pelaporan-kegiatan.laporan');
        })->name('pelaporan-kegiatan.laporan');

        Route::get('/verifikasi', function () {
            return view('components.pelaporan-kegiatan.verifikasi');
        })->name('pelaporan-kegiatan.verifikasi');
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

// Route::get('permohonan-skt', function () {
//     return view('components.permohonan-skt.skt');
// })->name("skt");

// Route::get('verifikasi', function () {
//     return view('components.permohonan-skt.verifikasi');
// })->name("verifikasi");