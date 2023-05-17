<?php

namespace App\HTTP\Services\Cart;

use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CartService
{

  public function create($request)
  {
    $soluongs = (int) $request->input('soluong');
    $product_id = (int) $request->input('sp_id');

    if ($soluongs <= 0 || $product_id <= 0) {
      Session::flash('error', 'Số lượng hoặc sản phẩm không chính xác');
      return false;
    }

    $carts = Session::get(key:'carts');

    if (is_null($carts)) {
      Session::put('carts', [
        $product_id => $soluongs
      ]);
  
      return true;
    }
    $exists = Arr::exists($carts, $product_id);

    if ($exists) {
      $carts[$product_id]=$carts[$product_id] + $soluongs;
    
      Session::put('carts',  $carts);
      return true;
    }
    $carts[$product_id]= $soluongs;
      Session::put('carts',$carts);
    return true;}
  

  public function getProduct()
  {
    $carts = Session::get('carts');
    if (is_null($carts)) return [];

    $productId = array_keys($carts);

    return DB::table('sanpham')

      ->whereIn('id_sp', $productId)
      ->get(); } 
  
  

  public function update($request)
  {
    Session::put('carts', $request->input('soluong_sp'));
    return true;
    // dd($request->all());
  }

  public function delete($id_sp)
  {
    $carts = Session::get('carts');

    unset($carts[$id_sp]);

    Session::put('carts', $carts);

    return true;
  }

  // public function deleteAll(): bool
  // {
  //   Session::forget('carts');
  //   return true;
  // }

  public function thanhtoan($request)
  {

  }
  // public function addOrder(Request $request)
  // {
  //   // Lấy thông tin khách hàng từ input
  //   $customer_id = $request->input('customer_id');

  //   // Tạo một đối tượng Order mới
  //   $order = new Order();
  //   $order->customer_id = $customer_id;
  //   $order->status_id = 1;
  //   $order->save();

  //   // Lấy giỏ hàng hiện tại
  //   $carts = Session::get('carts');
  //   $productIds = array_keys($carts);

  //   foreach ($productIds as $productId) {
  //     $product = DB::table('sanpham')->with(['promotion'])
  //       ->select('id', 'name', 'quantity', 'thumb', 'price', 'promotion_id')
  //       ->where('id', $productId)
  //       ->firstOrFail();
  //     $product_id = $product->id;
  //     $quantity = $carts[$productId];
  //     $price = $product->price - $product->price * $product->promotion->sale;
      
  //     $productDetails[] = [
  //       'id' => $product->id,
  //       'name' => $product->name,
  //       'thumb' => $product->thumb,
  //       'quantity' => $quantity,
  //       'price' => $price
  //     ];

  //     // Tạo một đối tượng OrderDetail mới
  //     $orderDetail = new Orderdetail();
  //     $orderDetail->order_id = $order->id;
  //     $orderDetail->product_id = $product_id;
  //     $orderDetail->quantity = $quantity;
  //     $orderDetail->price = $price;
  //     $orderDetail->save();

  //     // Trừ số lượng sản phẩm trong kho
  //     $product->quantity -= $quantity;
  //     $product->save();
  //   }
  //   Session::forget('carts');

  //   $customer = Auth::guard('cus')->user();
    
  //   Mail::send('emails.wait',compact('customer', 'order', 'productDetails'), function($email) use($customer){
  //     $email->subject('Phong Vũ - Chờ duyệt đơn hàng');
  //     $email->to($customer->email,$customer->name);
  //   });
    
  //   return redirect('/addpay')->with('success', 'Thanh toán thành công');
  }

