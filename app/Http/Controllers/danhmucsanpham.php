<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
Session_start();
/**
 * Summary of danhmucsanpham
 */
class danhmucsanpham extends Controller
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
    public function them_danhmuc(){
        $this->Authlogin();
        return view('admin.themdanhmuc');
    }
    public function themdanhmuc(Request $request){
        $this->Authlogin();
       
       $data=array();
       $data['Ten_loai_sp']=$request->tendanhmuc;
       $data['Mo_ta']=$request->mota;
        DB::table('loaisp')->insert($data);
        Session::put('message','Thêm thành công!');
        return Redirect::to('/lietkedanhmuc');
    }  
    public function lietkedanhmuc(){
        
        $this->Authlogin();
        $lietke=DB::table('loaisp')->paginate(3);
        if($key=request()->tukhoa){
            $lietke=DB::table('loaisp')->where('Ten_loai_sp','like','%'.$key.'%')->paginate(3);
        }
        $manager=view('admin.lietkedanhmuc')->with ('lietkedanhmuc',$lietke);
        return view('admin_layout')->with('admin.lietkedanhmuc',$manager);
    }
    public function suadanhmuc($id_ma_loai_sp){
        $this->Authlogin();
        $sua=DB::table('loaisp')->where('id',$id_ma_loai_sp)->get();
        $manager=view('admin.suadanhmuc')->with ('suadanhmuc',$sua);
        return view('admin_layout')->with('admin.suadanhmuc',$manager);
    }
    public function sua_danhmuc(Request $request,$id_ma_loai_sp){
        $this->Authlogin();
       
        $data=array();
        $data['Ten_loai_sp']=$request->tendanhmuc;
        $data['Mo_ta']=$request->mota;
         DB::table('loaisp')->where('id',$id_ma_loai_sp)->update($data);
         Session::put('message','Cập nhật thành công!');
         return Redirect::to('/lietkedanhmuc');
     }  
     public function xoadanhmuc($id_ma_loai_sp){
        DB::table('loaisp')->where('id',$id_ma_loai_sp)->delete();
        Session::put('message','Xóa thành công!');
        return Redirect::to('/lietkedanhmuc'); 
     }

     public function hienthi($id_ma_loai_sp){
      
        $loai = DB::table('loaisp')
            ->get();
        $ncc = DB::table('nhacungcap')
            ->get();
        $sp_loai = DB::table('sanpham')->join('loaisp',"sanpham.loaisp_id",'=','loaisp.id')->where("sanpham.loaisp_id",$id_ma_loai_sp)->get();
        return view('pages.hienthidanhmuc.hienthi')->with('sp_loai',$sp_loai)->with('loaisp',$loai);
        
     }
     
}
