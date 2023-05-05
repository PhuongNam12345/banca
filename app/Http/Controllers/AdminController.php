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
        $ma_tk = session::get('Ma_tk');
        if ($ma_tk) {
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 's xac!');
            return Redirect::to('/admin')->send();
        }
    }
    public function logout()
    {
        Session::put('Ma_tk', null);
        return view('admin');
    }
    public function admin()
    {
        return view('admin');
    }

    public function show_dashboard()
    {
        $this->Authlogin();
        return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_pass = md5($request->admin_pass);
        $resut = DB::table('taikhoan')
            ->where('Tentaikhoan', $admin_email)
            ->where('Matkhau', $admin_pass)
            ->first();
        if ($resut) {
            if ($resut->Quyen == 1) {
                Session::put('Ma_tk', $resut->Ma_tk);
                return Redirect::to('/dashboard');
            }
        } else {
            Session::put('message', 'Sai tai khoan mat khau. vui long nhap lai chinh xac!');
            return Redirect::to('/admin');
        }
    }
}
