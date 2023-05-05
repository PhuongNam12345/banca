<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
Session_start();

class sanpham extends Controller
{
    public function Authlogin()
    {
        $ma_tk = session::get('Ma_tk');
        if ($ma_tk) {
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 's xac!');
            return Redirect::to('/admin')->send();
        }
    }
    public function lietkesanpham()
    {
        $lietke = DB::table('sanpham')
            ->join('loaisp', 'sanpham.Ma_loai_sp', '=', 'loaisp.Ma_loai_sp')
            ->join('nhacungcap', 'sanpham.Ma_ncc', '=', 'nhacungcap.Ma_ncc')
            ->get();

        $manager = view('admin.lietkesanpham')->with('lietkesanpham', $lietke);
        return view('admin_layout')->with('admin.lietkesanpham', $manager);
    }
    public function them_sanpham()
    {
        $loai = DB::table('loaisp')->get();
        $ncc = DB::table('nhacungcap')->get();

        return view('admin.themsanpham')
            ->with('loai', $loai)
            ->with('ncc', $ncc);
    }
    public function themsanpham(Request $request)
    {
        $data = [];
        $data['Ma_sp'] = $request->masanpham;
        $data['Ten_sp'] = $request->tensanpham;
        $data['Ma_loai_sp'] = $request->loaisp;
        $data['Mota'] = $request->mota;
        $data['Mau_sac'] = $request->mausac;
        $data['Don_gia'] = $request->dongia;
        $data['Ma_ncc'] = $request->ncc;
        $data['Hinh'] = $request->hinhanh;
        $get_hinh = $request->file('hinhanh');
        if ($get_hinh) {
            $get_ten = $get_hinh->getClientOriginalName();
            $name_image = current(explode('.', $get_ten));
            $new_img = $name_image . rand(0, 99) . '.' . $get_hinh->getClientOriginalExtension();
            $get_hinh->move('public/uploads/sanpham', $new_img);
            $data['Hinh'] = $new_img;
            DB::table('sanpham')->insert($data);
            Session::put('message', 'Them thanh cong!');
            return Redirect::to('/lietkesanpham');
        }
        $data['Hinh'] = '';
        DB::table('sanpham')->insert($data);
        Session::put('message', 'Them thanh cong!');
        return Redirect::to('/lietkesanpham');
    }
    public function suasanpham($id_ma_sp)
    {
        $sua = DB::table('sanpham')
            ->where('Ma_sp', $id_ma_sp)
            ->get();
        $loai = DB::table('loaisp')
            ->get();
        $ncc = DB::table('nhacungcap')
            ->get();
        return view('admin.suasanpham')
            ->with('suasanpham', $sua)
            ->with('loai', $loai)
            ->with('ncc', $ncc);
    }
    public function sua_danhmuc(Request $request, $id_ma_sp)
    {
        $data = [];
        $data['Ma_sp'] = $request->madanhmuc;
        $data['Ten_loai_sp'] = $request->tendanhmuc;
        $data['Mo_ta'] = $request->mota;
        DB::table('loaisp')
            ->where('Ma_sp', $id_ma_sp)
            ->update($data);
        Session::put('message', 'cap nhat thanh cong!');
        return Redirect::to('/lietkedanhmuc');
    }
    public function xoasanpham($id_ma_sp)
    {
        DB::table('sanpham')
            ->where('Ma_sp', $id_ma_sp)
            ->delete();
        Session::put('message', 'Xoa thanh cong!');
        return Redirect::to('/lietkesanpham');
    }
    public function giohang(){
        return view('pages.giohang');
    }
}
