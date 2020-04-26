<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Room_type;

use Illuminate\Http\Request;

class RoomTypeController extends Controller
{

    // ADD ROOM TYPE
    // get form add room type
    public function add() {
        return view('admin/room-type/add');
    }

    //save add room type
    public function save_add(Request $request) {
        $this->validate($request,[
            // nguyên tắc chỉ định
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'short_description' => 'required',
        ]);
        $room_type = new Room_type();
        $room_type['name'] = $request->name;
        $room_type['slug'] = $request->slug;
        $room_type['images'] = $request->images;
        $room_type['price'] = $request->price;
        $room_type['short_description'] = $request->short_description;
        $room_type['description'] = $request->description;
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_image_name));
            $new_images = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

            $get_image->move('images',$new_images);
            $room_type['images'] = $new_images;
            $room_type->images = $new_images;
            //dd($_POST); tương đương dd($request->all());
            $room_type->fillable($request->all());
            $room_type->save();
            //Post::created($request->all());
            return redirect() -> route('room_type');
        }
        $room_type['images'] = "" ;
        //dd($_POST); tương đương dd($request->all());
        $room_type->fillable($request->all());
        //dd($room_type);die();
        $room_type->save();
        //Post::created($request->all());
        return redirect() -> route('room_type');
    }



    // EDIT ROOM_TYPE
    // get form room type edit
    public function edit($id) {
        $model = Room_type::find($id);
        return view('admin/room-type/edit',[
            'model' => $model
        ]);
    }

    // save room type edit
    public function save_edit(Request $request, $id) {
        $this->validate($request,[
            // nguyên tắc chỉ định
            'name' => 'required',
            'slug' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'short_description' => 'required',
        ]);
        $room_type = Room_type::find($id);
        $room_type['name'] = $request->name;
        $room_type['slug'] = $request->slug;
        $room_type['images'] = $request->images;
        $room_type['price'] = $request->price;
        $room_type['short_description'] = $request->short_description;
        $room_type['description'] = $request->description;
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_image_name));
            $new_images = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

            $get_image->move('images',$new_images);
            $room_type['images'] = $new_images;
            $room_type->images = $new_images;
            //dd($_POST); tương đương dd($request->all());
            $room_type->fillable($request->all());
            $room_type->save();
            //Post::created($request->all());
            return redirect() -> route('room_type');
        }
        $room_type['images'] = "" ;
        //dd($_POST); tương đương dd($request->all());
        $room_type->fillable($request->all());
        $room_type->save();
        //Post::created($request->all());
        return redirect() -> route('room_type');

    }


    // DELETE ROOM_TYPE
    public function delete($id) {
        // trong laravel có hỗ trợ hàm delete
        $room_type = Room_type::find($id);
        //dd($room_type);die();
        $room_type->delete();
        return redirect()->route('room_type');
        //Room_type::find($id)->delete();
        // sau khi xóa xong có thể dùng redirect để chuyển hướng đến trang nào đó qua route hoặc dùng back để quay lại trang
        //return redirect() -> back();
    }

    // VIEW ROOM_TYPE
    public function index() {
        $room_type = Room_type::search('name','slug','price')->paginate(1); // select * form limit 0,5 (phân trang và limit hiển thị là 5)
        return view('admin/room-type/index',[
            'room_types' => $room_type,
        ]);
    }
}

