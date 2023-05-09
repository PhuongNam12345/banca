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
        $id_sp = session::get('id_sp');
        if ($id_sp) {
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 's xac!');
            return Redirect::to('/admin')->send();
        }
    }
    public function lietkesanpham()
    {
        $lietke = DB::table('sanpham')
            ->join('loaisp', 'sanpham.loaisp_id', '=', 'loaisp.id')
            ->join('nhacungcap', 'sanpham.nhacungcap_id', '=', 'nhacungcap.id')
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
        $data['Ten_sp'] = $request->tensanpham;
        $data['loaisp_id'] = $request->loaisp;
        $data['Mota'] = $request->mota;
        $data['Mau_sac'] = $request->mausac;
        $data['Don_gia'] = $request->dongia;
        $data['nhacungcap_id'] = $request->ncc;
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
            ->where('id_sp', $id_ma_sp)
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
        $data['id_sp'] = $request->madanhmuc;
        $data['Ten_loai_sp'] = $request->tendanhmuc;
        $data['Mo_ta'] = $request->mota;
        DB::table('loaisp')
            ->where('id_sp', $id_ma_sp)
            ->update($data);
        Session::put('message', 'cap nhat thanh cong!');
        return Redirect::to('/lietkedanhmuc');
    }
    public function xoasanpham($id_ma_sp)   
    {
        DB::table('sanpham')
            ->where('id_sp', $id_ma_sp)
            ->delete();
        Session::put('message', 'Xóa thành công!');
        return Redirect::to('/lietkesanpham');
    }
    public function giohang(){
        return view('pages.giohang');
    }
    public function chitietsanpham($id_ma_sp){
      
        $loai = DB::table('loaisp')
            ->get();
        $ncc = DB::table('nhacungcap')
            ->get();
        $chitiet = DB::table('sanpham') ->join('loaisp',"sanpham.loaisp_id",'=','loaisp.id')->where('id_sp', $id_ma_sp)->get();
        return view('pages.hienthidanhmuc.chitietsanpham')
        ->with('loai', $loai)
        ->with('chitiet', $chitiet)
        ->with('ncc', $ncc);
        
     }
}
