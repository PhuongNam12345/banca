<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class giohang extends Controller
{

    public function themgiohang($id){
   
        $sanpham=  DB::table('sanpham')->where('id_sp', $id);
        $sanpham= array();
        $cart=session()->get(key:'cart');
        if(isset($cart[$id])){
          $cart[$id]['So_luong']=$cart[$id]['So_luong']+1;
        }else{
          $cart[$id]=[
              'ten'=> $sanpham['Ten_sp'],
              'gia'=> $sanpham['Don_gia'],
              'So'=>1
          ];
         }
         session()->put('cart',$cart);
         echo "<pre>";
      print_r(session()->get(key:'cart'));
 
  }
  public function giohang(request $request){    
    $id_hiden=$request->qty_hidden;
    $qy=$request->qty;
    $data= DB::table('sanpham') ->where('id_sp','=',$id_hiden)->get();
    echo '<pre>';

    print_r($data);



}}
 -->
