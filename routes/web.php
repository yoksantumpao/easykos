<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PemilikKosController,
    PenghuniKosController,
    PencariKosController,
    KamarKosController,
    RumahKosController,
    AlamatKosController,
    FotoKosController,
    GedungController,
    SuperAdminKosController,
};

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('partial.layout');
});
Route::get('/pencari_kos',[PencariKosController::class,'index'])->name('pencari_kos.index');
Route::get('/pencari_kos/create',[PencariKosController::class,'create'])->name('pencari_kos.create');
Route::post('/pencari_kos',[PencariKosController::class,'store'])->name('pencari_kos.store');
Route::get('/pencari_kos/{pencari_kos}/edit',[PencariKosController::class,'edit'])->name('pencari_kos.edit');
Route::put('/pencari_kos/{pencari_kos}',[PencariKosController::class,'update'])->name('pencari_kos.update');
Route::delete('/pencari_kos/{pencari_kos}',[PencariKosController::class,'destroy'])->name('pencari_kos.destroy');

Route::resource('pemilik_kos', PemilikKosController::class);
Route::resource('penghuni_kos', PenghuniKosController::class);
Route::resource('pencari_kos', PencariKosController::class);
Route::resource('kamar_kos', KamarKosController::class);
Route::resource('rumah_kos', RumahKosController::class);
Route::resource('alamat_kos', AlamatKosController::class);
Route::resource('gedung', gedungController::class);
Route::resource('foto_kos', FotoKosController::class);
Route::resource('super_admin_kos', SuperAdminKosController::class);