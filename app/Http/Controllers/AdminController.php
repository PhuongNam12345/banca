<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
Session_start();
class AdminController extends Controller
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
    public function logout()
    {
        Session::put('id', null);
        return view('admin');
    }
    public function admin()
    {
        return view('admin');
    }
    public function dangki()
    {
        return view('admin.admindangki');
    }
    
    public function dang_ki(Request $request){
   
        $data=array();
        $dataa=array();
        $data['Ten_kh']=$request->tenkh;
        $data['Gioitinh']=$request->gioitinh;
        $data['Email_kh']=$request->email;
        $data['Sdt']=$request->sdt;
        $data['Diachi']=$request->diachi;   
        $dataa['Tentaikhoan']=$request->tentk;
        $dataa['Matkhau']=$request->matkhau;
        $dataa['Quyen']='2';
        DB::table('taikhoan')->insert($dataa);
        
        $sss= DB::table('taikhoan')->orderByDesc('id')->first();

        $data['taikhoan_id']=$sss->id;

        DB::table('khachhang')->insert($data);
       
         Session::put('message','Them thanh cong!');
         return Redirect::to('/admin');
     }

    public function show_dashboard()
    {
        $this->Authlogin();
        $khachhang= DB::table('khachhang')->count()  ; 
        $loaisp= DB::table('loaisp') ->count()  ; 
        $ncc= DB::table('nhacungcap') ->count()  ; 
        $sanpham= DB::table('sanpham') ->count()  ; 
        $duyet= DB::table('hoa_don')->where('tinhtrang_id',1) ->count()  ; 

        $donhang= DB::table('hoa_don')->where('tinhtrang_id',2) ->count()  ; 

        $donhuy= DB::table('hoa_don')->where('tinhtrang_id',3) ->count()  ; 
            return view('admin.dashboard')
            ->with('loaisp',$loaisp)
            ->with('khachhang',$khachhang)
            ->with('ncc',$ncc)
            ->with('sanpham',$sanpham)
            ->with('duyet',$duyet)
            ->with('donhang',$donhang)
            ->with('donhuy',$donhuy);
    
        
    }
    public function tinnhan()
    {
        $this->Authlogin();
        $lietke = DB::table('khachhang')
        ->join('taikhoan', 'khachhang.taikhoan_id', '=', 'taikhoan.id')
        ->join('lienhe', 'lienhe.taikhoan_id', '=', 'khachhang.taikhoan_id')->orderByDesc('id_tn')
        ->paginate(5);
    
        return view('admin.tinnhan')
        ->with('lietke', $lietke);
    }
    public function xoatinnhan($id_tn){
        $this->Authlogin();
        DB::table('lienhe')->where('id_tn',$id_tn)->delete();
        Session::put('message','Xóa thành công!');
        return Redirect::to('/tinnhan'); 
     }
     public function binhluan(Request $request)
     {
         $this->Authlogin();
         $search = $request->get('search');
        //  $danhgia = DB::table('binh_luan')->get();
        //  $searchs = $request->get('searchs');
         $sanpham = DB::table('sanpham')->get();
     
         $lietke = DB::table('khachhang')   
         ->join('taikhoan', 'khachhang.taikhoan_id', '=', 'taikhoan.id')
         ->join('binh_luan', 'binh_luan.taikhoan_id', '=', 'khachhang.taikhoan_id')
         ->join('sanpham', 'sanpham.id_sp', '=', 'binh_luan.sanpham_id')->where('sanpham.id_sp', 'like', '%' . $search . '%')
        ->paginate(5);
     
         return view('admin.binhluan')->with('sanpham', $sanpham)
         ->with('lietke', $lietke);
     }
     public function xoabinhluan($id_bl){
         $this->Authlogin();
         DB::table('binh_luan')->where('id_bl',$id_bl)->delete();
         Session::put('message','Xóa thành công!');
         return Redirect::to('/binhluan'); 
      }
    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_pass = $request->admin_pass;
        $resut = DB::table('taikhoan')
            ->where('Tentaikhoan', $admin_email)
            ->where('Matkhau', $admin_pass)
            ->first();  
        if ($resut) {
            if ($resut->Quyen == 1) {
                Session::put('id', $resut->id);
                return Redirect::to('/dashboard');
            }
            else{
                Session::put('id', $resut->id);
                return Redirect::to('/');
            }
        } else {
            Session::put('message', 'Sai tai khoan mat khau. vui long nhap lai chinh xac!');
            return Redirect::to('/admin');
        }
    }
}
