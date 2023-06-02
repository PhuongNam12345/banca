<?php

namespace App\Http\Controllers;

use App\HTTP\Services\Cart\CartService;
use App\Models\Promotion;
use Illuminate\Http\JsonResponse as HttpJsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\JsonResponse;
use Illuminate\Support\Facades\Mail;
class CartController extends Controller
{
  protected $cartService;
  /**
   * Display a listing of the resource.
   */
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
  public function __construct(CartService $cartService)
  {

    $this->cartService = $cartService;
  }

  public function index(Request $request)
  {
    $result =$this->cartService->create($request);

    if ($result === false) {
      return redirect()->back();
    }
    return redirect('/giohang');
    
  }
  // public function index(Request $request)
  // {
  //   $search = $request->get('search');
  //   $statuses = Status::all();
  //   $orders = Order::with('status', 'customer', 'user')
  //     ->where('status_id', 'like', '%' . $search . '%')
  //     ->orderBy('id', 'desc')
  //     ->paginate(5);
  //   $orders->appends(['search' => $search]);
  //   return view('admin.order.list', [
  //     'title' => 'Danh Sách đơn hàng',
  //     'orders' => $orders,
  //     'statuses' => $statuses,
  //   ]);
  // }
  public function donhang(Request $request)
  {
    $search = $request->get('search');
    $donhang=DB::table('hoa_don')->join('khachhang','khachhang.id','=','hoa_don.khachhang_id')
    ->join('tinhtrangdon','tinhtrangdon.id','=','hoa_don.tinhtrang_id')->where('tinhtrangdon.id', 'like', '%' . $search . '%')->orderByDesc('id_hd')->paginate(5);
  //   if($key=request()->tukhoa){
  //     $donhang=DB::table('hoa_don')->join('khachhang','khachhang.id','=','hoa_don.khachhang_id')
  //     ->join('tinhtrangdon','tinhtrangdon.id','=','hoa_don.tinhtrang_id')->where('tinhtrangdon.id','like','%'.$key.'%') ->paginate(4);
  // }
 
    $tinhtrang=DB::table('tinhtrangdon') ->get();
    return view('admin.donhang') ->with('tinhtrang', $tinhtrang)
        ->with('donhang', $donhang);
  }
  public function suadonhang($id_hd)
  {
    $chitiet=DB::table('sanpham')->join('chitietdonhang','chitietdonhang.sanpham_id','=','sanpham.id_sp')->where('hoadon_id',$id_hd)->get();
    $donhang=DB::table('hoa_don')->join('khachhang','khachhang.id','=','hoa_don.khachhang_id')->where('id_hd',$id_hd)->get();
    return view('admin.chitietdonhang') 
    ->with('chitiet', $chitiet)
      ->with('donhang', $donhang);
  }
  public function sua_donhang($id_hd)
  {
    $sss=DB::table('chitietdonhang')->join('sanpham','chitietdonhang.sanpham_id','=','sanpham.id_sp')->where('hoadon_id',$id_hd)->first();
    $chitiet=DB::table('sanpham')->join('chitietdonhang','chitietdonhang.sanpham_id','=','sanpham.id_sp')->where('hoadon_id',$id_hd)->get();
    $donhang=DB::table('hoa_don')->join('khachhang','khachhang.id','=','hoa_don.khachhang_id')->where('id_hd',$id_hd)->first();
   $chitiets= DB::table('hoa_don')->where('id_hd',$id_hd)->update( ['tinhtrang_id' => 2]); 
   $mail=$donhang->Email_kh;
    $name=$donhang->Ten_kh;
    Mail::send('email.xacnhan',compact('name','donhang','chitiet'), function($email) use ($name,$mail){
        $email->subject('Thông tin đặt hàng');
        $email->to($mail,$name);
    });
    foreach ($chitiet as $key => $items){
      $id=$sss->id_sp;
     $cc= $sss->So_luong-$items->So_luong;
      DB::table('sanpham')  ->where('id_sp', $id)->update( ['So_luong' => $cc]); 
    }

    Session::put('message','Đã cập nhật đơn hàng!');
  return redirect('/donhang');
  }
  public function huy_donhang($id_hd)
  {  $chitiet=DB::table('sanpham')->join('chitietdonhang','chitietdonhang.sanpham_id','=','sanpham.id_sp')->where('hoadon_id',$id_hd)->get();
    $donhang=DB::table('hoa_don')->join('khachhang','khachhang.id','=','hoa_don.khachhang_id')->where('id_hd',$id_hd)->first();
    $chitiets= DB::table('hoa_don')->where('id_hd',$id_hd)->update( ['tinhtrang_id' => 3]); 
    $mail=$donhang->Email_kh;
     $name=$donhang->Ten_kh;
     Mail::send('email.huydon',compact('name','donhang','chitiet'), function($email) use ($name,$mail){
         $email->subject('Thông tin đặt hàng');
         $email->to($mail,$name);
     });
     Session::put('message','Đã cập nhật đơn hàng!');
   return redirect('/donhang');
  }


  public function show()
  {
    // $this->Authlogin();
    $id = session::get('id');
    if($id){
    $products = $this->cartService->getProduct();
     // $this->Authlogin();
     // Lấy thông tin khách hàng từ input
     $lietke = DB::table('khachhang')
         ->where('taikhoan_id', $id)->get();

         
    return view('pages.giohang.giohang', [
      'title' => 'Giỏ hàng',
      'products'=>$products,
      'carts' => Session::get('carts')
    ])->with('lietke', $lietke);;}else {
      Session::put('message', 'Vui lòng đăng nhập');
      return Redirect::to('/admin');
  }

  }
  // public function show1()
  // {
  //   // $this->Authlogin();
  //   $id = session::get('id');
  // // Lấy thông tin khách hàng từ input
  // $lietke = DB::table('khachhang')
  //     ->where('taikhoan_id', $id)->get();
  //     return view('pages.giohang.giohang') 
  //     ->with('lietke', $lietke)
   

  // }
 

//   public function showPay()
//   {
//     // $customer = Auth::customer();
//     $promotions = Promotion::all();
//     $products = $this->cartService->getProduct();

//     return view('pay', [
//       'title' => 'Thanh toán',
//       'products' => $products,
//       'promotions' => $promotions,
//       'carts' => Session::get('carts'),
//     ]);
//   }

  public function update(Request $request)
  {
    $this->cartService->update($request);
    Session::put('message','Cập nhật thành công! ');
    return redirect('/giohang');
  }

  public function delete($id_sp){
     $this->cartService->delete($id_sp);
     Session::put('message','Xóa thành công! ');
    return redirect('/giohang');
  }
  public function thanhtoan( Request $request){
    $this->cartService->addCart($request);
    Session::put('message','Đơn hàng đã đặt. hãy chờ admin duyệt! ');
    return redirect('/giohang');

     } 
    // $this->cartService->thanhtoan($request);


 }
//   public function deleteAll(): JsonResponse
//   {
//     $result = $this->cartService->deleteAll();
//     if ($result) {
//       return response()->json([
//         'error' => false,
//         'message' => 'Đã xóa toàn bộ sản phẩm trong giỏ hàng'
//       ]);
//     }

//     return response()->json([
//       'error' => true
//     ]);
//   }

//   public function addOrder(Request $request)
//   {
//     $this->cartService->addOrder($request);
//     return redirect('/order');
//   }
// }
