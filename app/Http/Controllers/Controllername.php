<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class Controllername extends Controller
{
    public function index(){
        $sanphamca= DB::table('sanpham')->where('loaisp_id','=','2')-> orderByDesc('id_sp')->limit(4)->get();
        $sanphamthucan= DB::table('sanpham')->where('loaisp_id','=','1')->orderByDesc('id_sp')-> limit(4)->get();
        $sanphamdungcu= DB::table('sanpham')->where('loaisp_id','=','3')-> orderByDesc('id_sp')->limit(4)->get();
        return view('pages.home')   
            ->with('sanphamca', $sanphamca) ->with('sanphamthucan', $sanphamthucan)->with('sanphamdungcu', $sanphamdungcu);
    }
    public function danhmuc(){   
        $sanpham = DB::table('sanpham')->get();
        $loaisp = DB::table('loaisp')->get();
        return view('pages.danhmuc')->with('loaisp', $loaisp)->with('sp_loai',$sanpham);
        
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
