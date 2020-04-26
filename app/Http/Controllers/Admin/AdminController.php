<?php

namespace App\Http\Controllers\Admin;

use App\Models\UserAdmin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

// kiểm tra đắng nhập
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index() {
        return view('admin/index');
    }

    // get form login
    public function login() {
        return view('admin/login');
    }

    // post form login
    public function post_login(Request $request) {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'Không được bỏ trống',
            'email.email' => 'Email không đúng định dạng vui lòng nhập lại',
            'password.required' => 'Mật khẩu không được để trống'
        ]);

        // Nếu tham số truyền vào là email và pass là đúng
        // $request->has('rememberMe') -> check xem có lưu không nếu có thì là true còn không thì là false
        // Khi sử dụng rememberMe cần tạo thêm 1 trường dữ liệu trong bảng là remember_token để có thể lưu và tạo name tại ô check box
        if (Auth::attempt($request->only('email','password'),$request->has('rememberMe'))) {
            return redirect()->route('admin');
        } else {
            return redirect()->back();
        }
        //dd($request->only('email','password'));
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin');
    }

}
