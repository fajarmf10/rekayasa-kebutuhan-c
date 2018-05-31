<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/permintaan-peminjaman', function(){
  return view('librarian/permintaan-peminjaman');
})->name('permintaan-peminjaman');
Route::get('/permintaan-peminjaman/single', function(){
  return view('librarian/single-permintaan');
})->name('single-permintaan');
Route::get('/cari-buku', function(){
  return view('user/cari-buku');
})->name('cari-buku');
Route::get('/history-peminjaman', function(){
  return view('user/history-peminjaman');
})->name('history-peminjaman');
Route::get('/pinjam-buku', function(){
  return view('user/pinjam-buku');
})->name('pinjam-buku');
Route::get('/detail-buku', function(){
  return view('user/detail-buku');
})->name('detail-buku');
Route::get('/daftar-peminjaman', function(){
  return view('librarian/daftar-peminjaman');
})->name('daftar-peminjaman');
Route::get('/stok-buku', function(){
  return view('supplier/stok-buku');
})->name('stok-buku');
Route::get('/cek-permintaan-buku', function(){
  return view('supplier/cek-permintaan-buku');
})->name('cek-permintaan-buku');
Route::get('/cek-permintaan-buku/single', function(){
  return view('supplier/single-permintaan-buku');
})->name('single-permintaan-buku');
