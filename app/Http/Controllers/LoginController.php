<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function index(){
        return view('account.login');
    }
    public function register(){
        return view('account.register');
    }
    public function register_submit(Request $req){
        $acc1 = new User();
        $acc1 ->name =$req->input('name');
        $acc1 ->email =$req->input('email');
        $acc1 ->password =$req->input('password');
        $acc1 ->save();
        return redirect('/login');
    }
    public function auth(Request $req){
        $credentials = $req->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Đăng nhập thành công, thực hiện hành động mong muốn
            return redirect()->intended('/');
        }
    
        // Đăng nhập thất bại, hiển thị thông báo lỗi
        return back()->withErrors([
            'email' => 'Thông tin không hợp lệ',
        ]);
    }
    
}
