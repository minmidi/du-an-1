<?php

namespace App\Http\Controllers\Admin;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    // ADD SERVICE
    // get form service add
    public function add() {
        return view('admin/service/add');
    }

    //save service add
    // Request để thay thế dd($_POST);
    public function save_add(Request $request) {

        $this->validate($request,[
            // nguyên tắc chỉ định
            'title' => 'required',
            'description' => 'required|',

        ]);
        $service = new Service();
        $service['title'] = $request->title;
        $service['images'] = $request->images;
        $service['description'] = $request->description;
        $service['status'] = $request->status;
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_image_name));
            $new_images = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

            $get_image->move('images',$new_images);
            $service['images'] = $new_images;
            $service->images = $new_images;
            //dd($_POST); tương đương dd($request->all());
            $service->fillable($request->all());
            $service->save();
            return redirect() -> route('service');
        }
        $service['images'] = "" ;
        $service->fillable($request->all());
        $service->save();
        return redirect() -> route('service');

    }

    // EDIT SERVICE
    // get form service edit
    public function edit($id) {
        $model = Service::find($id);
        return view('admin/service/edit',[
            'model' => $model
        ]);
    }

    // save service edit
    public function save_edit(Request $request, $id) {
        $service = Service::find($id);
        $service['title'] = $request->title;
        $service['images'] = $request->images;
        $service['description'] = $request->description;
        $service['status'] = $request->status;
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_image_name));
            $new_images = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

            $get_image->move('images',$new_images);
            $service['images'] = $new_images;
            $service->images = $new_images;
            //dd($_POST); tương đương dd($request->all());
            $service->fillable($request->all());
            $service->save();
            return redirect() -> route('service');
        }
        $service['images'] = "" ;
        $service->fillable($request->all());
        $service->save();
        return redirect() -> route('service');
    }


    // DELETE SERVICE
    public function delete($id) {
        // trong laravel có hỗ trợ hàm delete
        Service::find($id)->delete();
        // sau khi xóa xong có thể dùng redirect để chuyển hướng đến trang nào đó qua route hoặc dùng back để quay lại trang
        return redirect() -> back();
    }

    // VIEW SERVICE
    public function index() {
        $service = Service::search('title')->paginate(1); // select * form limit 0,5 (phân trang và limit hiển thị là 5)
        return view('admin/service/index',[
            'services' => $service,
        ]);
    }
}
