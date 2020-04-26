<?php

// đường dẫn chứa PostController (chỉ ra thư mục mà class đang nằm trong đó)
namespace App\Http\Controllers\Admin;

// sử dụng controller
use App\Http\Controllers\Controller;

// Gọi và sử dụng Models
use App\Models\UserAdmin;

// Sử dụng request để thêm trong laravel
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    // ADD USER
    // get form news user add
    public function add() {
        return view('admin/user/add');
    }

    //save news user add
    public function save_add(Request $request) {
        // Validate form
        $this->validate($request,[
            // nguyên tắc chỉ định
            'username' => 'required|unique:user_admins,username',
            'email' => 'required|email|unique:user_admins,email',
            'phone_number' => 'required|unique:posts,short_description',
            'password' => 'required',
            // thuộc tính same giống với password
            'confirm_password' => 'required|same:password'
        ]);
        // Mã hóa mật khẩu sử dụng bcrypt
        $password=bcrypt($request -> password);
        // Lưu mật khẩu đã mã hóa vào trong trường password sử dụng merge
        $request->merge(['password'=> $password]);
        // dd($request->all());
        //dd($_POST); tương đương dd($request->all());
        UserAdmin::create($request->all());
        return redirect() -> route('user');
    }

    // EDIT USER
    // get form news user edit
    public function edit($id) {
        $user = UserAdmin::find($id);
        return view('admin/user/edit',[
            'users' => $user
        ]);
    }

    // save news user edit
    public function save_edit(Request $request, $id) {
        $this->validate($request,[
            // nguyên tắc chỉ định
            'username' => 'required|unique:user_admins,username',
            'email' => 'required|email|unique:user_admins,email',
            'phone_number' => 'required|unique:posts,short_description',
            'password' => 'required',
            // thuộc tính same giống với password
            'confirm_password' => 'required|same:password'
        ]);
        // loại bỏ 1 trường _token
        $request->offsetUnset('_token');
        $password=bcrypt($request -> password);
        $request->merge(['password'=> $password]);
        UserAdmin::where(['id'=>$id])->update($request -> all());
        return redirect() -> route('user');

    }


    // DELETE USER
    public function delete($id) {
        // trong laravel có hỗ trợ hàm delete
        UserAdmin::find($id)->delete();
        // sau khi xóa xong có thể dùng redirect để chuyển hướng đến trang nào đó qua route hoặc dùng back để quay lại trang
        return redirect() -> back();
    }

    // VIEW USER
    public function index() {
        $user = UserAdmin::paginate(1);
        return view('admin/user/index',[
            'users' => $user
        ]);
    }
}
