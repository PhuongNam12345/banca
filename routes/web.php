<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controllername;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\danhmucsanpham;
use App\Http\Controllers\khachhang;
use App\Http\Controllers\sanpham;
use App\Http\Controllers\nhacungcap;
use App\Http\Controllers\taikhoan;
use App\Http\Controllers\giohang;
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
Route::post('/dang-ki', [AdminController::class, 'dang_ki']);
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
//khachhang
Route::get('/lietkekhachhang', [khachhang::class, 'lietkekhachhang']);
Route::get('/themkhachhang', [khachhang::class, 'them_khachhang']);
Route::post('/them-khachhang', [khachhang::class, 'themkhachhang']);
Route::get('/suakhachhang/{id_kh}', [khachhang::class, 'suakhachhang']);
Route::post('/sua-khachhang/{id_kh}', [khachhang::class, 'sua_khachhang']);
Route::get('/xoakhachhang/{id_kh}', [khachhang::class, 'xoakhachhang']);
//taikhoan
Route::get('/lietketaikhoan', [taikhoan::class, 'lietketaikhoan']);
Route::get('/themtaikhoan', [taikhoan::class, 'them_taikhoan']);
Route::post('/them-taikhoan', [taikhoan::class, 'themtaikhoan']);
Route::get('/suataikhoan/{id_ma_tk}', [taikhoan::class, 'suataikhoan']);
Route::post('/sua-taikhoan/{id_ma_tk}', [taikhoan::class, 'sua_taikhoan']);
Route::get('/xoataikhoan/{id_ma_tk}', [taikhoan::class, 'xoataikhoan']);
//sanpham
Route::get('/lietkesanpham', [sanpham::class, 'lietkesanpham']);
Route::get('/themsanpham', [sanpham::class, 'them_sanpham']);
Route::post('/them-sanpham', [sanpham::class, 'themsanpham']);
Route::get('/suasanpham/{id_ma_sp}', [sanpham::class, 'suasanpham']);
Route::post('/sua-sanpham/{id_ma_sp}', [sanpham::class, 'sua_sanpham']);
Route::get('/xoasanpham/{id_ma_sp}', [sanpham::class, 'xoasanpham']);
Route::get('/chitiet/{id_ma_sp}', [sanpham::class, 'chitietsanpham']);
// Route::get('/chitiet/{id_ma_sp}', [sanpham::class, 'binhluan']);
//cart
Route::post('/save-cart', [CartController::class, 'index']);
Route::get('/giohang', [CartController::class, 'show']);
Route::get('/xoa/{id_sp}', [CartController::class, 'delete']);
Route::post('/capnhatgiohang', [CartController::class, 'update']);
Route::post('/thanhtoan', [CartController::class, 'thanhtoan']);
//danh muc home
Route::get('/loaisp/{id_ma_loai_sp}', [Controllername::class, 'loaisp']);
Route::get('/danhmuc', [Controllername::class, 'danhmuc']);
// Route::post('/timkiem', [Controllername::class, 'timkiem']);
Route::get('/lienhe', [Controllername::class, 'lienhe']);
// Route::get('/chitiet', [Controllername::class, 'chitiet']);
Route::get('/', [Controllername::class, 'index']);
Route::get('/danh-muc/{id_ma_loai_sp}', [danhmucsanpham::class, 'hienthi']);
// Route::get('/giohasng', [sanpham::class, 'giohang']);
// route ::get(uri:'products/add-to/{id}', action: 'giohang@themgiohang')->name(name:'themgiohang');
Route::get('/blog', [Controllername::class, 'blog']);
Route::get('/blog1', [Controllername::class, 'blog1']);
Route::get('/blog2', [Controllername::class, 'blog2']);