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

        $carts = Session::get(key: 'carts');

        if (is_null($carts)) {
            Session::put('carts', [
                $product_id => $soluongs,
            ]);

            return true;
        }
        $exists = Arr::exists($carts, $product_id);

        if ($exists) {
            $carts[$product_id] = $carts[$product_id] + $soluongs;

            Session::put('carts', $carts);
            return true;
        }
        $carts[$product_id] = $soluongs;
        Session::put('carts', $carts);
        return true;
    }

    public function getProduct()
    {
        $carts = Session::get('carts');
        if (is_null($carts)) {
            return [];
        }

//  $id = session::get('id');

//   $lietke = DB::table('khachhang')
//      ->where('taikhoan_id', $id)->get();    
        $productId = array_keys($carts);
        return DB::table('sanpham')
            ->whereIn('id_sp', $productId)
            ->get();
    }

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

    //   public function addCart($request)
    //     {
    //         try {
    //             DB::beginTransaction();

    //             $carts = Session::get('carts');

    //             if (is_null($carts))
    //                 return false;

    //                $khachhang=DB::table('khachhang');
    //             $customer = $khachhang::create([
    //                 'name' => $request->input('name'),
    //                 'phone' => $request->input('phone'),
    //                 'address' => $request->input('address'),
    //                 'email' => $request->input('email'),
    //                 'content' => $request->input('content')
    //             ]);

    //             // $this->infoProductCart($carts, $customer->id);

    //             DB::commit();
    //             // Session::flash('success', 'Đặt Hàng Thành Công');
    // echo"dd";
    //             Session::forget('carts');
    //         } catch (\Exception $err) {
    //             DB::rollBack();
    //             Session::flash('error', 'Đặt Hàng Lỗi, Vui lòng thử lại sau');
    //             return false;
    //         }

    //         return true;
    //     }

    // protected function infoProductCart($carts, $customer_id)
    // {
    //   DB::table('khachhang');
    //     $productId = array_keys($carts);
    //     $products = Product::select('id', 'name', 'price', 'price_sale', 'thumb')
    //         ->where('active', 1)
    //         ->whereIn('id', $productId)
    //         ->get();

    //     $data = [];
    //     foreach ($products as $product) {
    //         $data[] = [
    //             'customer_id' => $customer_id,
    //             'product_id' => $product->id,
    //             'pty'   => $carts[$product->id],
    //             'price' => $product->price_sale != 0 ? $product->price_sale : $product->price
    //         ];
    //     }

    //     return Cart::insert($data);
    // }
    public function destroy($request)
  {
    $id = (int) $request->input('id');
    $order = Order::where('id', $id)->first();
    if ($order) {
      Orderdetail::where('order_id', $order->id)->delete();
      $order->delete();
      return true;
    }

    return false;
  }
    public function addCart(Request $request)
    {
        $id = session::get('id');
        // Lấy thông tin khách hàng từ input
        $khachhangs = DB::table('khachhang')
            ->where('taikhoan_id', $id)
            ->first();
        $customer_id = $khachhangs->id;

        $data = [];
        $data['khachhang_id'] = $customer_id;
        $data['Tri_gia'] = $request->tongtien;
        $data['tinhtrang_id'] = 1;

        DB::table('hoa_don')->insert($data);
        $hoadon = DB::table('hoa_don')->orderByDesc('id_hd')->first();
        // $hodon=DB::table('hoa_don')->where('taikhoan_id',$id)->first();
        // // // Lấy giỏ hàng hiện tại
        $carts = Session::get('carts');
        $productIds = array_keys($carts);
        // print_r( $productIds);

        foreach ($productIds as $productId) {
            $product = DB::table('sanpham')
                ->select('id_sp', 'Ten_sp', 'loaisp_id', 'Mota', 'Mau_sac', 'Don_gia', 'So_luong', 'Hinh', 'nhacungcap_id')
                ->where('id_sp', $productId)
                ->first();
            $product_id = $product->id_sp;
            $dongia = $product->Don_gia;
            $soluong = $carts[$productId];
            //   $price = $product->price - $product->price * $product->promotion->sale;

            //   $productDetails[] = [
            //     'id' => $product->id,
            //     'name' => $product->name,
            //     'thumb' => $product->thumb,
            //     'quantity' => $quantity,
            //     'price' => $price
            //   ];
            DB::table('chitietdonhang')->insert([
                'hoadon_id' => $hoadon->id_hd,
                'sanpham_id' => $product_id,
                'So_luong' => $soluong,
                'Don_gia' => $dongia
            ]);
            //   // Tạo một đối tượng OrderDetail mới
            //   $orderDetail = new Orderdetail();
            //   $orderDetail->order_id = $order->id;
            //   $orderDetail->product_id = $product_id;
            //   $orderDetail->quantity = $quantity;
            //   $orderDetail->price = $price;
            //   $orderDetail->save();

            //   // Trừ số lượng sản phẩm trong kho
            //   $ss=$product->So_luong -  $soluong;
            //  DB::table('sanpham')  ->where('id_sp', $productId)->update( ['So_luong' => $ss]); 
            // }
            Session::forget('carts');

            // $customer = Auth::guard('cus')->user();

            // Mail::send('emails.wait',compact('customer', 'order', 'productDetails'), function($email) use($customer){
            //   $email->subject('Phong Vũ - Chờ duyệt đơn hàng');
            //   $email->to($customer->email,$customer->name);
            // });

            // return redirect('/addpay')->with('success', 'Thanh toán thành công');}
        }
    }
}
