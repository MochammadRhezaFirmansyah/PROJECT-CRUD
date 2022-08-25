<?php

use App\Http\Controllers\Rheza;
use Illuminate\Support\Facades\Route;

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

Route::get('/Rheza', function () {
    return view('pages.tampil');
});

Route::get('/Firmansyah', function () {
    return view('pages.form');
});

Route::post('/simpanData',[rheza::class,'simpanData']);

Route::get('/Rheza',[rheza::class,'index']);

Route::get('/ubah/{id}',[rheza::class,'ubah']);
Route::PUT('/perbaharui/{id}',[rheza::class,'data']);

Route::delete('/hapus/{id}',[rheza::class,'hapusData'])->name('hapus');

// register

Route::get('/addReg', function () {
    return view('Register.regTambah');
});

Route::get('/regAll',[rheza::class,'ubah']);
Route::get('/addreg',[rheza::class,'ubah']);
Route::get('/showReg',[rheza::class,'ubah']);
Route::get('/updateReg',[rheza::class,'ubah']);
Route::get('/deleteReg',[rheza::class,'ubah']);