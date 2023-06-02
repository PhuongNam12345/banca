<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
Session_start();

class sanpham extends Controller
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
    public function lietkesanpham()
    {$this->Authlogin();
        $lietke = DB::table('sanpham')
            ->join('loaisp', 'sanpham.loaisp_id', '=', 'loaisp.id')
            ->join('nhacungcap', 'sanpham.nhacungcap_id', '=', 'nhacungcap.id')
            ->paginate(4);
            if($key=request()->tukhoa){
                $lietke = DB::table('sanpham')
            ->join('loaisp', 'sanpham.loaisp_id', '=', 'loaisp.id')
            ->join('nhacungcap', 'sanpham.nhacungcap_id', '=', 'nhacungcap.id')->where('Ten_sp','like','%'.$key.'%')
            ->paginate(4);
            }
        $manager = view('admin.lietkesanpham')->with('lietkesanpham', $lietke);
        return view('admin_layout')->with('admin.lietkesanpham', $manager);
    }
    public function them_sanpham()
    {
        $this->Authlogin();
        $loai = DB::table('loaisp')->get();
        $ncc = DB::table('nhacungcap')->get();

        return view('admin.themsanpham')
            ->with('loai', $loai)
            ->with('ncc', $ncc);
    }
    public function themsanpham(Request $request)
    {
      
        $data = [];
        $data['Ten_sp'] = $request->tensanpham;
        $data['loaisp_id'] = $request->loaisp;
        $data['Mota'] = $request->mota;
        $data['Mau_sac'] = $request->mausac;
        $data['Don_gia'] = $request->dongia;
        $data['So_luong'] = $request->soluong;
        $data['nhacungcap_id'] = $request->ncc;
        $data['Hinh'] = $request->hinhanh;
        $get_hinh = $request->file('hinhanh');
        if ($get_hinh) {
            $get_ten = $get_hinh->getClientOriginalName();
            $name_image = current(explode('.', $get_ten));
            $new_img = $name_image . rand(0, 99) . '.' . $get_hinh->getClientOriginalExtension();
            $get_hinh->move('public/uploads/sanpham', $new_img);
            $data['Hinh'] = $new_img;
            DB::table('sanpham')->insert($data);
            Session::put('message', 'Thêm thành công!');
            return Redirect::to('/lietkesanpham');
        }
        $data['Hinh'] = '';
        DB::table('sanpham')->insert($data);
        Session::put('message', 'Thêm thành công!');
        return Redirect::to('/lietkesanpham');
    }
    public function suasanpham($id_ma_sp)
    {
        $this->Authlogin();
        $sua = DB::table('sanpham')
            ->where('id_sp', $id_ma_sp)
            ->get();
        $loai = DB::table('loaisp')
            ->get();
        $ncc = DB::table('nhacungcap')
            ->get();
        return view('admin.suasanpham')
            ->with('suasanpham', $sua)
            ->with('loai', $loai)
            ->with('ncc', $ncc);
    }
    public function sua_sanpham(Request $request,$id_ma_sp){
        $this->AuthLogin();
        $data = [];
        $data['Ten_sp'] = $request->tensanpham;
        $data['loaisp_id'] = $request->loaisp;
        $data['Mota'] = $request->mota;
        $data['Mau_sac'] = $request->mausac;
        $data['Don_gia'] = $request->dongia;
        $data['So_luong'] = $request->soluong;
        $data['nhacungcap_id'] = $request->ncc;
        $get_hinh = $request->file('hinhanh');
       
       if($get_hinh){
                   $get_ten = $get_hinh->getClientOriginalName();
                   $name_image = current(explode('.',$get_ten));
                   $new_image =  $name_image.rand(0,99).'.'.$get_hinh->getClientOriginalExtension();
                   $get_hinh->move('public/uploads/sanpham',$new_image);
                   $data['hinhanh'] = $new_image;
                   DB::table('sanpham')->where('id_sp',$id_ma_sp)->update($data);
                   Session::put('message','Cập nhật sản phẩm thành công');
                   return Redirect::to('all-product');
           
       }
           
       DB::table('sanpham')->where('id_sp',$id_ma_sp)->update($data);
       Session::put('message','Cập nhật sản phẩm thành công');
       return Redirect::to('/lietkesanpham');
   }
    public function xoasanpham($id_ma_sp)   
    {$this->Authlogin();
        DB::table('sanpham')
            ->where('id_sp', $id_ma_sp)
            ->delete();
        Session::put('message', 'Xóa thành công!');
        return Redirect::to('/lietkesanpham');
    }
    public function giohang(){
        $this->Authlogin();     
        return view('pages.giohang');
    }
    // public function themgiohang($id){
   
    //       $sanpham=  DB::table('sanpham')->where('id_sp', $id);
    //       $sanpham= array();
    //       $cart=session()->get(key:'cart');
    //       if(isset($cart[$id])){
    //         $cart[$id]['So_luong']=$cart[$id]['So_luong']+1;
    //       }else{
    //         $cart[$id]=[
    //             'ten'=> $sanpham['Ten_sp'],
    //             'gia'=> $sanpham['Don_gia'],
    //             'So'=>1
    //         ];
    //        }
    //        session()->put('cart',$cart);
    //        echo "<pre>";
    //     print_r(session()->get(key:'cart'));
   
    // }
    // public function binhluan($id_ma_sp){
    //     $cmt = DB::table('binh_luan')->join('sanpham',"sanpham.id_sp",'=','binh_luan.sanpham_id')->where('sanpham_id', $id_ma_sp)->get();
    //     return view('pages.hienthidanhmuc.chitietsanpham')
    //         ->with('cmt', $cmt);
    // }
    public function chitietsanpham($id_ma_sp){
        
        $loai = DB::table('loaisp')
            ->get();
        $ncc = DB::table('nhacungcap')
            ->get();
        $cmt = DB::table('binh_luan')->where('sanpham_id', $id_ma_sp)->get();
           
        $chitiet = DB::table('sanpham')->join('loaisp',"sanpham.loaisp_id",'=','loaisp.id')
       ->where('id_sp', $id_ma_sp)->get();
        return view('pages.hienthidanhmuc.chitietsanpham') 
        ->with('loai', $loai)
        ->with('chitiet', $chitiet)
        ->with('ncc', $ncc)
        ->with('cmt', $cmt);   
     }
     public function binh_luan(request $request){   
       
        $product_id=$request->product_id;
        $binhluan=DB::table('binh_luan')->join('taikhoan','taikhoan.id','=','binh_luan.taikhoan_id')
        ->where('sanpham_id',$product_id)->orderByDesc('binh_luan.id_bl')->get();

        $out='';  
        foreach($binhluan as $key=>$item){
            $out.=' 
            <div class="review_list">                           
            <div class="review_item mt-10">
                <div class="media">
                    <div class="d-flex">
                        <img class="w-15" src="'.url('/public/frontend/img/product/single-product/review-2.png').'" alt="" />
                    </div>
                    <div class="media-body">
                        <h4>'.$item->Tentaikhoan.'</h4>
                        <p>
                        '.$item->ngay_binh_luan.'
                     </p>
                   
                       '.$item->Danh_gia.'
                        <i class="fa fa-star"></i>
                    </div>
                </div>
                <p>
                   '.$item->Binh_luan.'
                </p>
            </div>

        </div>';
        }
        
        echo $out;
    }
    public function gui_binh_luan(request $request){
        $id_taikhoan=session::get('id');
        $product_id=$request->product_id;
        $danhgia=$request->danhgia;
        $binhluan=$request->binh_luan;
        
        $data=[];
        $data['taikhoan_id']=$id_taikhoan;
        $data['Binh_luan']= $binhluan;
        $data['Danh_gia']= $danhgia;
        $data['sanpham_id']=$product_id;
        
        DB::table('binh_luan')        
            ->insert($data);
       

  
}}
        
    //     $loai = DB::table('loaisp')
    //         ->get();
    //     $ncc = DB::table('nhacungcap')
    //         ->get();
    //     $cmt = DB::table('binh_luan')->where('sanpham_id', $id_ma_sp)->get();
           
    //     $chitiet = DB::table('sanpham')->join('loaisp',"sanpham.loaisp_id",'=','loaisp.id')
    //    ->where('id_sp', $id_ma_sp)->get();
    //     return view('pages.hienthidanhmuc.chitietsanpham') 
    //     ->with('loai', $loai)
    //     ->with('chitiet', $chitiet)
    //     ->with('ncc', $ncc)
    //     ->with('cmt', $cmt);   
     

