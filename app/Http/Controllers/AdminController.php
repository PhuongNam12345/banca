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
            Session::put('message', 's xac!');
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

        $data['Tentaikhoan']=$request->tentaikhoan;
        $data['Matkhau']=$request->matkhau;
        $data['Quyen']='1';
         DB::table('taikhoan')->insert($data);
         Session::put('message','Them thanh cong!');
         return Redirect::to('/admin');
     }

    public function show_dashboard()
    {
        $this->Authlogin();
        return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_pass = ($request->admin_pass);
        $resut = DB::table('taikhoan')
            ->where('Tentaikhoan', $admin_email)
            ->where('Matkhau', $admin_pass)
            ->first();
        if ($resut) {
            if ($resut->Quyen == 1) {
                Session::put('id', $resut->id);
                return Redirect::to('/dashboard');
            }
        } else {
            Session::put('message', 'Sai tai khoan mat khau. vui long nhap lai chinh xac!');
            return Redirect::to('/admin');
        }
    }
}
