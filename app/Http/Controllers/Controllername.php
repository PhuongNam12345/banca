<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
Session_start();
class Controllername extends Controller
{ public function testmail(){
    $name="sss";
    Mail::send('email.xacnhan',compact('name'), function($email) use ($name){
        $email->subject('demo ne');
        $email->to('namdang020201@gmail.com',$name);
    });
   
}
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
    public function danhmuc(Request $request){   
        $search = $request->get('search');
        $sanpham = DB::table('sanpham')->get();
        $loaisp = DB::table('loaisp')->get();
        if($key=request()->tukhoa){
            $sanpham = DB::table('sanpham')->where('Ten_sp','like','%'.$key.'%')->get(); 
        }
        $sanpham = DB::table('sanpham')->where('sanpham.loaisp_id', 'like', '%' . $search . '%')->paginate(10);
        return view('pages.danhmuc')->with('loaisp', $loaisp)->with('sp_loai',$sanpham);
        
    }
    // public function timkiem(request $request){   
    //     $tukhoas =$request->tukhoa;
    //     $loaisp = DB::table('loaisp')->get();
    //     $timkiemsp=DB::table('sanpham')->where('Ten_sp','like','%'.$tukhoas.'%')->get();
    //     return view('pages.timkiem')->with('loaisp', $loaisp)->with('timkiemsp',$timkiemsp);
        
    // }
    public function lienhe(){    
        // $lietke = DB::table('taikhoan')->paginate(4);
        // if($key=request()->tukhoa){
        //     $lietke = DB::table('taikhoan')->where('Tentaikhoan','like','%'.$key.'%')->paginate(4);
        // }
        // $manager = view('admin.lietketaikhoan')->with('lietketaikhoan', $lietke);
        // return view('admin_layout')->with('admin.lietketaikhoan', $manager);   
        return view('pages.lienhe');
    }
    public function canhan(){    
        // $lietke = DB::table('taikhoan')->paginate(4);
        // if($key=request()->tukhoa){
        //     $lietke = DB::table('taikhoan')->where('Tentaikhoan','like','%'.$key.'%')->paginate(4);
        // }
        // $manager = view('admin.lietketaikhoan')->with('lietketaikhoan', $lietke);
        // return view('admin_layout')->with('admin.lietketaikhoan', $manager);   
        $id = session::get('id');
        if($id==1){ Session::put('message','Đây là tài khoản admin');
            $lietke = DB::table('khachhang')
            ->join('taikhoan', 'khachhang.taikhoan_id', '=', 'taikhoan.id')->where('khachhang.taikhoan_id',$id)
            ->get();
            return view('pages.canhan')->with('lietke', $lietke);}else{
       if($id){ $lietke = DB::table('khachhang')
        ->join('taikhoan', 'khachhang.taikhoan_id', '=', 'taikhoan.id')->where('khachhang.taikhoan_id',$id)
        ->get();
        return view('pages.canhan')->with('lietke', $lietke);
    }else{
        Session::put('message','Bạn chưa đăng nhập! Hãy đăng nhập để xem thông tin');
        $lietke = DB::table('khachhang')
        ->join('taikhoan', 'khachhang.taikhoan_id', '=', 'taikhoan.id')->where('khachhang.taikhoan_id',$id)
        ->get();
        return view('pages.canhan')->with('lietke', $lietke);
    }                           
      
    }
    }
    public function suacanhan(){
        // $this->Authlogin();
        $id = session::get('id');
        $lietke = DB::table('khachhang')
        ->join('taikhoan', 'khachhang.taikhoan_id', '=', 'taikhoan.id')->where('khachhang.taikhoan_id',$id)

        ->get();
        return view('pages.suacanhan')->with('lietke', $lietke);
    }
    public function sua_canhan(Request $request){  
        $id = session::get('id');
        $data=array();
        $data['Ten_kh']=$request->tenkh;
        $data['Gioitinh']=$request->gioitinh;
        $data['Email_kh']=$request->email;
        $data['Sdt']=$request->sdt;
        $data['Diachi']=$request->diachi;
   
         DB::table('khachhang')->where('taikhoan_id',$id)->update($data);
         Session::put('message','Cập nhật thành công!');
         return Redirect::to('/canhan');
     }  
    
    public function lien_he(request $request){        
    
             $id = session::get('id');
            $data=array();
            $data['taikhoan_id']=$id;
            $data['noi_dung']=$request->noidung;
            $data['chu_de']=$request->chude;
           
             DB::table('lienhe')->insert($data);
             Session::put('message','Gửi tin nhắn thành công! Cảm ơn bạn đã gửi!');
             return Redirect::to('/lienhe');
       
    
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
