<?php

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

use App\Http\Controllers\ProdukController;
Route::get('/produk',
          [ProdukController::class, 'index']);

Route::get('/produk/{id}',
          [ProdukController::class, 'show'])->name('produk/{id}');

use App\Http\Controllers\PelangganController;
Route::get('/pelanggan',[PelangganController::class, 'index']);
Route::get('/pelanggan/view/{id}',[PelangganController::class,'view'])->name('pelanggan.view/{id}');
Route::get('/pelanggan/edit/{id}',[PelangganController::class,'edit'])->name('pelanggan/edit/{id}');
Route::get('/pelanggan/create',[PelangganController::class,'create']);
Route::post('/pelanggan/store',[PelangganController::class,'store'])->name('pelanggan/store');
Route::post('/pelanggan/update',[PelangganController::class,'update'])->name('pelanggan/update');
Route::get('/pelanggan/delete/{id}',
   [PelangganController::class,'delete'])->name('pelanggan/delete/{id}');

#Route::get('/pelanggan/destroy/{id}',[PelangganController::class,'destroy'])->name('pelanggan/destroy/{id}');

/*
use App\Http\Controllers\PelangganController;
Route::get('/pelanggan',[PelangganController::class,'index']);
Route::get('/pelanggan/show/{id}',[PelangganController::class,'show'])->name('pelanggan/show/{id}');
Route::get('/pelanggan/edit/{id}',[PelangganController::class,'edit'])->name('pelanggan/edit/{id}');
Route::get('/pelanggan/create',[PelangganController::class,'create']);
Route::post('/pelanggan/store',[PelangganController::class,'store'])->name('pelanggan/store');
Route::post('/pelanggan/update',[PelangganController::class,'update'])->name('pelanggan/update');
Route::get('/pelanggan/delete/{id}',[PelangganController::class,'delete'])->name('pelanggan/delete/{id}');
*/
