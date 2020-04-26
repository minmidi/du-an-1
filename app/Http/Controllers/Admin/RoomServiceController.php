<?php

namespace App\Http\Controllers\Admin;
use App\Models\Room_service;
use App\Models\Room_type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomServiceController extends Controller
{
    public function add() {

        // ADD ROOM SERVICE

        //get form add room service
        $room_types = Room_type::all();
        //dd($room_types);die;
        //$room_sevice = Room_service::join('room_types','room_types.id','=','room_services.room_type_id')->get();
        //dd($room_sevice);die;
        return view('admin/room-service/add',[
            'room_types'=>$room_types
            ]);
    }

    //save form add room service
    public function save_add(Request $request) {
        Room_service::join('room_types','room_types.id','=','room_services.room_type_id')->create($request->all());
        //dd($request->all());die;
        //Room_service::create($request->all());
        return redirect()->route('room_service');
    }

    // EDIT ADD ROOM SERVICE
    // get form room service edit
    public function edit($id) {

        $room_service = Room_service::find($id);
        $room_type = Room_type::all();
        //dd($room_type);die;
        //dd($room_type);die;
        return view('admin/room-service/edit',[
            'room_types' => $room_type,
            'room_service'=>$room_service
        ]);
    }

    // save room service edit
    public function save_edit(Request $request, $id) {
        $request->offsetUnset('_token');
        Room_service::where(['id'=>$id])->update($request->all());
        return redirect() -> route('room_service');
    }


    // DELETE ROOM SERVICE
    public function delete($id) {
        // trong laravel có hỗ trợ hàm delete
        $room_service = Room_service::find($id);

        //dd($room_service);die;
        $room_service->delete();
        //return redirect() -> back();
        // sau khi xóa xong có thể dùng redirect để chuyển hướng đến trang nào đó qua route hoặc dùng back để quay lại trang
        return redirect()->route('room_service');
    }

    // VIEW ROOM SERVICE
    public function index() {
        // $post = Post::all();  // select * from posts
        //$room_sevice=Room_service::join('room_types','room_types.id','=','room_services.room_type_id')->get();

        //$room_sevice = Room_service::paginate(1); // select * form limit 0,5 (phân trang và limit hiển thị là 5)
        //return view('admin/room-service/index',[
        //    'room_sevices' => $room_sevice,
        //]);

        //$room_sevice = Room_service::join('room_types','room_types.id','=','room_services.room_type_id')->get();
        //dd($room_sevice);die;
        $room_sevice = Room_service::search('title')->paginate(1);
        return view('admin/room-service/index',[
            'room_sevices' => $room_sevice,
        ]);
    }
}
