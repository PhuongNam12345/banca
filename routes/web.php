<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllername;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\danhmucsanpham;
use App\Http\Controllers\sanpham;
use App\Http\Controllers\nhacungcap;
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
Route::get('/', [Controllername::class, 'index']);
Route::get('/dangki', [AdminController::class, 'dangki']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/dashboard', [AdminController::class, 'show_dashboard']);
Route::get('/logout', [AdminController::class, 'logout']);
Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);
//danhmuc   
Route::get('/themdanhmuc', [danhmucsanpham::class, 'them_danhmuc']);
Route::get('/lietkedanhmuc', [danhmucsanpham::class, 'lietkedanhmuc']);
Route::post('/them-danhmuc', [danhmucsanpham::class, 'themdanhmuc']);
Route::get('/suadanhmuc/{id_ma_loai_sp}', [danhmucsanpham::class, 'suadanhmuc']);
Route::post('/sua-danhmuc/{id_ma_loai_sp}', [danhmucsanpham::class, 'sua_danhmuc']);
Route::get('/xoadanhmuc/{id_ma_loai_sp}', [danhmucsanpham::class, 'xoadanhmuc']);
//nhacungcap
Route::get('/lietkencc', [nhacungcap::class, 'lietkencc']);
Route::get('/themncc', [nhacungcap::class, 'them_ncc']);
Route::post('/them-ncc', [nhacungcap::class, 'themncc']);
Route::get('/suancc/{id_ma_ncc}', [nhacungcap::class, 'suancc']);
Route::post('/sua-ncc/{id_ma_ncc}', [nhacungcap::class, 'sua_ncc']);
Route::get('/xoancc/{id_ma_ncc}', [nhacungcap::class, 'xoancc']);
//sanpham
Route::get('/lietkesanpham', [sanpham::class, 'lietkesanpham']);
Route::get('/themsanpham', [sanpham::class, 'them_sanpham']);
Route::post('/them-sanpham', [sanpham::class, 'themsanpham']);
Route::get('/suasanpham/{id_ma_sp}', [sanpham::class, 'suasanpham']);
Route::post('/sua-sanpham/{id_ma_sp}', [sanpham::class, 'sua_sanpham']);
Route::get('/xoasanpham/{id_ma_sp}', [sanpham::class, 'xoasanpham']);
Route::get('/chitiet/{id_ma_sp}', [sanpham::class, 'chitietsanpham']);

//danh muc home
Route::get('/danhmuc', [Controllername::class, 'danhmuc']);
// Route::get('/chitiet', [Controllername::class, 'chitiet']);
Route::get('/', [Controllername::class, 'index']);
Route::get('/danh-muc/{id_ma_loai_sp}', [danhmucsanpham::class, 'hienthi']);
Route::get('/giohang', [sanpham::class, 'giohang']);
Route::get('/blog', [Controllername::class, 'blog']);
Route::get('/blog1', [Controllername::class, 'blog1']);
Route::get('/blog2', [Controllername::class, 'blog2']);