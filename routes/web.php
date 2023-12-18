<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelaporanKegiatanController;
use App\Http\Controllers\PermohonanDanaController;
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
    Route::get('/', function () {
        return view('components.dashboard');
    })->name("dashboard");
    Route::group(['prefix' => 'permohonan-skt'], function () {

        Route::get('/ormas-terdaftar', function () {
            return view('components.permohonan-skt.skt');
        })->name('permohonan-skt.ormas');

        Route::get('/verifikasi', function () {
            return view('components.permohonan-skt.verifikasi');
        })->name('permohonan-skt.verifikasi');

        Route::get('/menunggu', function () {
            return view('components.permohonan-skt.menunggu');
        })->name('permohonan-skt.menunggu');
    });

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

        Route::get('/status-skt', function () {
            return view('components.dashboard-ormas.status');
        })->name('dashboard-ormas.status');

        Route::get('/keorganisasian', function () {
            return view('components.dashboard-ormas.keorganisasian');
        })->name('dashboard-ormas.keorganisasian');

        Route::get('/kepengurusan', function () {
            return view('components.dashboard-ormas.kepengurusan');
        })->name('dashboard-ormas.kepengurusan');

        Route::get('/dokumen', function () {
            return view('components.dashboard-ormas.dokumen');
        })->name('dashboard-ormas.dokumen');
    });

    Route::group(['prefix' => 'dashboard-default'], function () {

        Route::get('/permohonanskt', function () {
            return view('components.dashboard-default.permohonanskt');
        })->name('dashboard-default.permohonanskt');
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