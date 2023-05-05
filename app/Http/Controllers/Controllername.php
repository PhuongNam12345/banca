<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class Controllername extends Controller
{
    public function index(){
        $sanphamca= DB::table('sanpham')->where('Ma_loai_sp','=','1')-> limit(4)->get();
        $sanphamthucan= DB::table('sanpham')->where('Ma_loai_sp','=','12')-> limit(4)->get();
        $sanphamdungcu= DB::table('sanpham')->where('Ma_loai_sp','=','1')-> limit(4)->get();
        return view('pages.home')   
            ->with('sanphamca', $sanphamca) ->with('sanphamthucan', $sanphamthucan)->with('sanphamdungcu', $sanphamdungcu);
    }
    public function danhmuc(){   
        $sanpham = DB::table('sanpham')->get();
        $loaisp = DB::table('loaisp')->get();
        return view('pages.danhmuc')->with('loaisp', $loaisp)->with('sp_loai',$sanpham);
        
    }

}
