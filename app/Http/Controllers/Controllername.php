<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
Session_start();
class Controllername extends Controller
{
    public function index(){
        $sanphamca= DB::table('sanpham')->where('loaisp_id','=','2')-> orderByDesc('id_sp')->limit(4)->get();
        $sanphamthucan= DB::table('sanpham')->where('loaisp_id','=','1')->orderByDesc('id_sp')-> limit(4)->get();
        $sanphamdungcu= DB::table('sanpham')->where('loaisp_id','=','3')-> orderByDesc('id_sp')->limit(4)->get();
        return view('pages.home')   
            ->with('sanphamca', $sanphamca) ->with('sanphamthucan', $sanphamthucan)->with('sanphamdungcu', $sanphamdungcu);
    }
    public function loaisp($id_ma_sp){
        switch($id_ma_sp){
            case 1:
            $name='Thức ăn';
     
            break;
            case 2: 
                $name='Cá Cảnh';
           
                break;
                case 3: 
                    $name='Dụng cụ';
                    break;

                  
        }
        $loaisp= DB::table('sanpham')->where('loaisp_id','=',$id_ma_sp)->join('loaisp', 'sanpham.loaisp_id', '=', 'loaisp.id')-> orderByDesc('id_sp')->paginate(5);
        return view('pages.hienthidanhmuc.loaisanpham')   
            ->with('loaisp', $loaisp)->with('name',$name) ;
    }
    public function danhmuc(){   
        $sanpham = DB::table('sanpham')->paginate(5);
        $loaisp = DB::table('loaisp')->get();
        if($key=request()->tukhoa){
            $sanpham = DB::table('sanpham')->where('Ten_sp','like','%'.$key.'%')->paginate(1); 
        }
        return view('pages.danhmuc')->with('loaisp', $loaisp)->with('sp_loai',$sanpham);
        
    }
    public function timkiem(request $request){   
        $tukhoas =$request->tukhoa;
        $loaisp = DB::table('loaisp')->get();
        $timkiemsp=DB::table('sanpham')->where('Ten_sp','like','%'.$tukhoas.'%')->get();
        return view('pages.timkiem')->with('loaisp', $loaisp)->with('timkiemsp',$timkiemsp);
        
    }
    public function lienhe(){        
        return view('pages.lienhe');
    }
    public function lienhec($id){        
        return view('pages.lienhe');
    }
    public function chitiet(){        
        return view('pages.hienthidanhmuc.chitietsanpham');
    }
    public function blog(){        
        return view('pages.blog.blog');
    }
    public function blog1(){        
        return view('pages.blog.blog1');
    }
    public function blog2(){        
        return view('pages.blog.blog2');
    }

}
