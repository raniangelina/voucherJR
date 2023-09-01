<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('adminjr.dash');
});

Route::get('merchant/dashboard', [HomeController::class, 'index'])->name('merchant.dashboard');
Route::get('merchant/login', [HomeController::class, 'loginmerchant'])->name('merchant.login');
Route::get('merchant/profil', [HomeController::class, 'profilmerchant'])->name('merchant.profil');
Route::get('merchant/checkvoc', [HomeController::class,'checkvoc'])->name('merchant.checkvoc');
Route::get('merchant/pakaivoc', [HomeController::class,'pakaivoc'])->name('merchant.pakaivoc');

Route::get('adminjr/login', [HomeController::class,'loginadminjr'])->name('adminjr.login');
Route::get('adminjr/dash', [HomeController::class,'dashadminjr'])->name('adminjr.dash');
Route::get('adminjr/profile', [HomeController::class,'profileadminjr'])->name('adminjr.profile');
Route::get('adminjr/merch/index', [HomeController::class,'daftarmerch'])->name('adminjr.merch.index');
Route::get('adminjr/merch/buat', [HomeController::class,'tambahmerch'])->name('adminjr.merch.buat');
Route::get('adminjr/merch/edit', [HomeController::class,'editmerch'])->name('adminjr.merch.edit');

Route::get('adminjr/voc/klaim', [HomeController::class,'klaimvoc'])->name('adminjr.voc.klaim');
Route::get('adminjr/voc/berhasil', [HomeController::class,'vocberhasil'])->name('adminjr.voc.berhasil');
Route::get('adminjr/voc/gagal', [HomeController::class,'vocgagal'])->name('adminjr.voc.gagal');