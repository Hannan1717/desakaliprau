<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\PejabatController;
use App\Http\Controllers\ProdukController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/wisata', [HomeController::class, 'wisata'])->name('wisata');

Route::get('/wisata/{slug}', [DetailController::class, 'index'])->name('detail');

Route::get('/makanan/{slug}', [DetailController::class, 'detailmakanan'])->name('detailmakanan');

Route::get('/produk/{slug}', [DetailController::class, 'detailproduk'])->name('detailproduk');

Route::get('/makanan', [HomeController::class, 'makanan'])->name('makanan');

Route::get('/produk', [HomeController::class, 'produk'])->name('produk');

Route::get('/profileDesa', [HomeController::class, 'profileDesa'])->name('profileDesa');


Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [WisataController::class, 'index'])->name('admin');
    Route::resource('wisata', WisataController::class);
    Route::resource('makanan', MakananController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('pejabat', PejabatController::class);
});

Auth::routes();
