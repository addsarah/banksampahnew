<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::resource('user', 'App\Http\Controllers\UserController');
Route::resource('nasabah', 'App\Http\Controllers\NasabahController');
Route::resource('pengemudi', 'App\Http\Controllers\PengemudiController');
Route::resource('produk', 'App\Http\Controllers\ProdukController');
Route::resource('pesanan', 'App\Http\Controllers\PesananController');
Route::resource('reportuser','App\Http\Controllers\ReportUserController');
Route::resource('reportnasabah','App\Http\Controllers\ReportNasabahController');
Route::resource('reportpengemudi','App\Http\Controllers\ReportPengemudiController');
Route::resource('reportproduk','App\Http\Controllers\ReportProdukController');
Route::resource('reportpesanan','App\Http\Controllers\ReportPesananController');


//cetak pdf
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('cetak_user','App\Http\Controllers\ReportUserController@cetak_user')->name('cetak_user');

//cetak pdf
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('cetak_nasabah','App\Http\Controllers\ReportNasabahController@cetak_nasabah')->name('cetak_nasabah');

//cetak pdf
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('cetak_pengemudi','App\Http\Controllers\ReportPengemudiController@cetak_pengemudi')->name('cetak_pengemudi');

//cetak pdf
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('cetak_produk','App\Http\Controllers\ReportProdukController@cetak_produk')->name('cetak_produk');

//cetak pdf
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('cetak_pesanan','App\Http\Controllers\ReportPesananController@cetak_pesanan')->name('cetak_pesanan');