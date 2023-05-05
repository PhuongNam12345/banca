<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
Session_start();

class taikhoan extends Controller
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
    public function lietketaikhoan()
    {
        $this->Authlogin();
        $lietke = DB::table('taikhoan')->get();
        $manager = view('admin.lietketaikhoan')->with('lietketaikhoan', $lietke);
        return view('admin_layout')->with('admin.lietketaikhoan', $manager);
    }
    public function them_taikhoan()
    {
        $this->Authlogin();
        return view('admin.themtaikhoan');
    }
    public function themtaikhoan(Request $request)
    {
        $this->Authlogin();
        $data = [];
        $data['Ma_tk'] = $request->matk;
        $data['Tentaikhoan'] = $request->tentk;
        $data['Matkhau'] = md5($request->matkhau);
        $data['Quyen'] = $request->quyen;

        DB::table('taikhoan')->insert($data);
        Session::put('message', 'Them thanh cong!');
        return Redirect::to('/lietketaikhoan');
    }
    public function suataikhoan($id_ma_tk)
    {
        $this->Authlogin();
        $sua = DB::table('taikhoan')
            ->where('Ma_tk', $id_ma_tk)
            ->get();
        $manager = view('admin.suataikhoan')->with('suataikhoan', $sua);
        return view('admin_layout')->with('admin.suataikhoan', $manager);
    }
    public function sua_taikhoan(Request $request, $id_ma_tk)
    {
        $this->Authlogin();
        $data = [];
        $data['Ma_tk'] = $request->id_ma_tk;
        $data['Tentaikhoan'] = $request->tentk;
        $data['Matkhau'] = md5($request->matkhau);
        $data['Quyen'] = $request->quyen;
        DB::table('taikhoan')
            ->where('Ma_tk', $id_ma_tk)
            ->update($data);
        Session::put('message', 'cap nhat thanh cong!');
        return Redirect::to('/lietketaikhoan');
    }
    public function xoataikhoan($id_ma_tk)
    {
        $this->Authlogin();
        DB::table('taikhoan')
            ->where('Ma_tk', $id_ma_tk)
            ->delete();
        Session::put('message', 'Xoa thanh cong!');
        return Redirect::to('/lietketaikhoan');
    }
}
