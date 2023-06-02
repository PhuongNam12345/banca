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
    
        if($id==1){
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', 'Vui lòng đăng nhập tài khoản Admin');
            return Redirect::to('/admin')->send();
        }
    }
    public function lietkekhachhang(){
        // ->join('taikhoan', 'khachhang.taikhoan_id', '=', 'taikhoan.id')
        $this->Authlogin();
        $lietke=DB::table('taikhoan')->join('khachhang','khachhang.taikhoan_id','=','taikhoan.id') ->paginate(4);
        if($key=request()->tukhoa){
            $lietke=DB::table('taikhoan')->join('khachhang','khachhang.taikhoan_id','=','taikhoan.id')->where('Ten_kh','like','%'.$key.'%') ->paginate(4);
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
        $dataa=array();
        $data['Ten_kh']=$request->tenkh;
        $data['Gioitinh']=$request->gioitinh;
        $data['Email_kh']=$request->email;
        $data['Sdt']=$request->sdt;
        $data['Diachi']=$request->diachi;
        $dataa['Tentaikhoan']=$request->taikhoan;
        $dataa['Matkhau']=$request->matkhau;
        $dataa['Quyen']='2';
    
        DB::table('taikhoan')->insert($dataa);
        
        $sss= DB::table('taikhoan')->orderByDesc('id')->first();

        $data['taikhoan_id']=$sss->id;
         DB::table('khachhang')->insert($data);
         Session::put('message','Thêm thành công!');
         return Redirect::to('/lietkekhachhang');
     } 
     public function suakhachhang($id_kh){
        $this->Authlogin();
        $sua=DB::table('taikhoan')->join('khachhang','khachhang.taikhoan_id','=','taikhoan.id')->where('khachhang.id',$id_kh)->get();
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
        // $data['taikhoan_id']=$request->taikhoan;
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
     public function donhang(Request $request)
  {
    $search = $request->get('search');
    $id= session::get('id');
    $donhang=DB::table('hoa_don')->join('khachhang','khachhang.id','=','hoa_don.khachhang_id')->where('khachhang.taikhoan_id',$id)
    ->join('tinhtrangdon','tinhtrangdon.id','=','hoa_don.tinhtrang_id')->where('tinhtrangdon.id', 'like', '%' . $search . '%')->orderByDesc('id_hd')->paginate(5);
  //   if($key=request()->tukhoa){
  //     $donhang=DB::table('hoa_don')->join('khachhang','khachhang.id','=','hoa_don.khachhang_id')
  //     ->join('tinhtrangdon','tinhtrangdon.id','=','hoa_don.tinhtrang_id')->where('tinhtrangdon.id','like','%'.$key.'%') ->paginate(4);
  // }
 
    $tinhtrang=DB::table('tinhtrangdon') ->get();
    return view('pages.giohang.muahang') ->with('tinhtrang', $tinhtrang)
        ->with('donhang', $donhang);
  }
}
