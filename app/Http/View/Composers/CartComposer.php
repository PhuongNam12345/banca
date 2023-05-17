<?php

namespace App\Http\View\Composers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CartComposer
{
  protected $users;

  public function __construct()
  {
  }

  public function compose(View $view): void
  {
    $carts = Session::get('carts');
    if (is_null($carts)) return ;

    $productId = array_keys($carts);

    $products =DB::table('sanpham')
    
    ->whereIn('id_sp', $productId)
    ->get(); 

      
    $view->with('products',$products);
  }
}
