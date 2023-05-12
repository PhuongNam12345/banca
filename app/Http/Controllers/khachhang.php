<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

Session_start();

class khachhang extends Controller
{
    public function Authlogin()
    {
        $id= session::get('id');
        if($id){
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', 'Vui lòng đăng nhập');
            return Redirect::to('/admin')->send();
        }
    }
    public function lietkekhachhang(){
        // ->join('taikhoan', 'khachhang.taikhoan_id', '=', 'taikhoan.id')
        $this->Authlogin();
        $lietke=DB::table('khachhang') ->paginate(3);
        if($key=request()->tukhoa){
            $lietke=DB::table('khachhang')->where('Ten_kh','like','%'.$key.'%') ->paginate(3);
        }
        $manager=view('admin.lietkekhachhang')->with ('lietkekhachhang',$lietke);
        return view('admin_layout')->with('admin.lietkekhachhang',$manager);
    }
    public function them_khachhang(){
        $this->Authlogin();
        return view('admin.themkhachhang');
    }
    public function themkhachhang(Request $request){
        $this->Authlogin();
        $data=array();
    
        $data['Ten_kh']=$request->tenkh;
        $data['Gioitinh']=$request->gioitinh;
        $data['Email_kh']=$request->email;
        $data['Sdt']=$request->sdt;
        $data['Diachi']=$request->diachi;
        $data['taikhoan_id']=$request->taikhoan;
         DB::table('khachhang')->insert($data);
         Session::put('message','Thêm thành công!');
         return Redirect::to('/lietkekhachhang');
     } 
     public function suakhachhang($id_kh){
        $this->Authlogin();
        $sua=DB::table('khachhang')->where('id',$id_kh)->get();
        $manager=view('admin.suakhachhang')->with ('suakhachhang',$sua);
        return view('admin_layout')->with('admin.suakhachhang',$manager);
    }
    public function sua_khachhang(Request $request,$id_kh){  
        $this->Authlogin(); 
        $data=array();

        $data['Ten_kh']=$request->tenkh;
        $data['Gioitinh']=$request->gioitinh;
        $data['Email_kh']=$request->email;
        $data['Sdt']=$request->sdt;
        $data['Diachi']=$request->diachi;
        $data['taikhoan_id']=$request->taikhoan;
         DB::table('khachhang')->where('id',$id_kh)->update($data);
         Session::put('message','Cập nhật thành công!');
         return Redirect::to('/lietkekhachhang');
     }  
     public function xoakhachhang($id_kh){
        $this->Authlogin();
        DB::table('khachhang')->where('id',$id_kh)->delete();
        Session::put('message','Xóa thành công!');
        return Redirect::to('/lietkekhachhang'); 
     }
}
