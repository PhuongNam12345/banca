<?php

namespace App\Http\Controllers;

use App\HTTP\Services\Cart\CartService;
use App\Models\Promotion;
use Illuminate\Http\JsonResponse as HttpJsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\JsonResponse;

class CartController extends Controller
{
  protected $cartService;
  /**
   * Display a listing of the resource.
   */
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


  public function show()
  {
    $products = $this->cartService->getProduct();

    return view('pages.giohang.giohang', [
      'title' => 'Giỏ hàng',
      'products'=>$products,
      'carts' => Session::get('carts')
    ]);
  }


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
 
    return redirect('/giohang');
  }

  public function delete($id_sp){
     $this->cartService->delete($id_sp);
     Session::put('message','Xóa thành công! ');
    return redirect('/giohang');
  }
  public function thanhtoan($request){
    // $this->cartService->thanhtoan($request);
    dd($request->input());

 }}

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
