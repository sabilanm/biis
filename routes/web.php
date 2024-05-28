<?php

use App\Http\Controllers\pegawai;
use App\Http\Controllers\pegawaiControler;
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

Route::get('/', [pegawai::class, 'show']);

Route::get('/tambah_pegawai',function () {
    return view('pegawai/tambah_pegawai');
});
// Route::resource('/pegawai/posts', pegawaiControler::class);
Route::post('/pegawai/posts', [pegawai::class, 'creat']);
