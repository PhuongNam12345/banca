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
        $id = session::get('id');
        if ($id) {
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'Vui lòng đăng nhập');
            return Redirect::to('/admin')->send();
        }
    }
    public function lietketaikhoan()
    {
        $this->Authlogin();
        $lietke = DB::table('taikhoan')->paginate(4);
        if($key=request()->tukhoa){
            $lietke = DB::table('taikhoan')->where('Ten_tk','like','%'.$key.'%')->paginate(4);
        }
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
        $data['Tentaikhoan'] = $request->tentk;
        $data['Matkhau'] = $request->matkhau;
        $data['Quyen'] = $request->quyen;

        DB::table('taikhoan')->insert($data);
        Session::put('message', 'Thêm thành công!');
        return Redirect::to('/lietketaikhoan');
    }
    public function suataikhoan($id_ma_tk)
    {
        $this->Authlogin();
        $sua = DB::table('taikhoan')
            ->where('id', $id_ma_tk)
            ->get();
        $manager = view('admin.suataikhoan')->with('suataikhoan', $sua);
        return view('admin_layout')->with('admin.suataikhoan', $manager);
    }
    public function sua_taikhoan(Request $request, $id_ma_tk)
    {
        $this->Authlogin();
        $data = [];
        $data['Tentaikhoan'] = $request->tentk;
        $data['Matkhau'] = $request->matkhau;
        $data['Quyen'] = $request->quyen;
        DB::table('taikhoan')
            ->where('id', $id_ma_tk)
            ->update($data);
        Session::put('message', 'Cập nhật thành công!');
        return Redirect::to('/lietketaikhoan');
    }
    public function xoataikhoan($id_ma_tk)
    {
        $this->Authlogin();
        DB::table('taikhoan')
            ->where('id', $id_ma_tk)
            ->delete();
        Session::put('message', 'Xóa thành công!');
        return Redirect::to('/lietketaikhoan');
    }
}
