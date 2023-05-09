<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
Session_start();


class nhacungcap extends Controller
{
    public function Authlogin()
    {
        $ma_tk= session::get('id');
        if($ma_tk){
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','s xac!');
            return Redirect::to('/admin')->send();
        }
    }
    public function lietkencc(){
        
        $this->Authlogin();
        $lietke=DB::table('nhacungcap')->get();
        $manager=view('admin.lietkencc')->with ('lietkencc',$lietke);
        return view('admin_layout')->with('admin.lietkencc',$manager);
    }
    public function them_ncc(){
        $this->Authlogin();
        return view('admin.themncc');
    }
    public function themncc(Request $request){
        $this->Authlogin();
        $data=array();
    
        $data['Ten_ncc']=$request->tenncc;
        $data['Diachi']=$request->diachi;
        $data['Email_ncc']=$request->email;
        $data['Sdt']=$request->sdt;
         DB::table('nhacungcap')->insert($data);
         Session::put('message','Them thanh cong!');
         return Redirect::to('/lietkencc');
     } 
     public function suancc($id_ma_ncc){
        $this->Authlogin();
        $sua=DB::table('nhacungcap')->where('id',$id_ma_ncc)->get();
        $manager=view('admin.suancc')->with ('suancc',$sua);
        return view('admin_layout')->with('admin.suancc',$manager);
    }
    public function sua_ncc(Request $request,$id_ma_ncc){  
        $this->Authlogin(); 
        $data=array();

        $data['Ten_ncc']=$request->tenncc;
        $data['Diachi']=$request->diachi;
        $data['Email_ncc']=$request->email;
        $data['Sdt']=$request->sdt;
         DB::table('nhacungcap')->where('id',$id_ma_ncc)->update($data);
         Session::put('message','cap nhat thanh cong!');
         return Redirect::to('/lietkencc');
     }  
     public function xoancc($id_ma_ncc){
        $this->Authlogin();
        DB::table('nhacungcap')->where('id',$id_ma_ncc)->delete();
        Session::put('message','Xoa thanh cong!');
        return Redirect::to('/lietkencc'); 
     }
}
