<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Barang;
use App\Http\Controllers\Supplier;
use App\Http\Controllers\Karyawan;
use App\Http\Controllers\Pembelian;
use App\Http\Controllers\Penjualan;

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

Route::get('home', function () {
    return view('home');
});

//barang
Route::get('barang',[Barang::class,'databarang']);                  //tampil data barang
Route::get('barang/{add}',[Barang::class,'addbarang']);             //tampil form add
Route::post('barang',[Barang::class,'addProcess']);             //action add barang
//edit
Route::get('barang/editbarang/{kode_brg}',[Barang::class,'editbarang']);    //tampil form edit
Route::patch('barang/{kode_brg}',[Barang::class,'editProcess']);            //proses edit
Route::delete('barang/{kode_brg}',[Barang::class,'deletebarang']);          //delete barang

//supplier
Route::get('supplier',[Supplier::class,'datasupplier']);            //tampil data
Route::get('supplier/{add}',[Supplier::class,'addsupplier']);       //tampil form
Route::post('supplier',[Supplier::class,'addProcess']);              //action add
//edit
Route::get('supplier/editsupplier/{kode_sup}',[Supplier::class,'editsupplier']);    //tampil form edit
Route::patch('supplier/{kode_sup}',[Supplier::class,'editProcess']);            //proses edit
Route::delete('supplier/{kode_sup}',[Supplier::class,'deletesupplier']);

//karyawan
Route::get('karyawan',[Karyawan::class,'datakaryawan']);
Route::get('karyawan/{add}',[Karyawan::class,'addkaryawan']);
Route::post('karyawan',[Karyawan::class,'addProcess']);
//edit
Route::get('karyawan/editkaryawan/{kode_kar}',[Karyawan::class,'editkaryawan']);    //tampil form edit
Route::patch('karyawan/{kode_kar}',[Karyawan::class,'editProcess']);            //proses edit
Route::delete('karyawan/{kode_kar}',[Karyawan::class,'deletekaryawan']);

//penjualan
Route::get('penjualan',[Penjualan::class,'datapenjualan']);
Route::get('penjualan/{add}',[Penjualan::class,'addpenjualan']);
Route::post('penjualan',[Penjualan::class,'addProcess']);
//edit
Route::get('penjualan/editpenjualan/{kode_jual}',[Penjualan::class,'editpenjualan']);    //tampil form edit
Route::patch('penjualan/{kode_jual}',[Penjualan::class,'editProcess']);            //proses edit
Route::delete('penjualan/{kode_jual}',[Penjualan::class,'deletepenjualan']);

