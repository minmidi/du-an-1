<?php

namespace App\Http\Controllers\Admin;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    // ADD SLIDER
    // get form news slider add
    public function add() {
        return view('admin/slider/add');
    }

    //save news slider add
    // Request để thay thế dd($_POST);
    public function save_add(Request $request) {
        $slider = new Slider();
        $slider['images'] = $request->images;
        $slider['status'] = $request->status;
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_image_name));
            $new_images = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

            $get_image->move('images',$new_images);
            $slider['images'] = $new_images;
            $slider->images = $new_images;
            //dd($_POST); tương đương dd($request->all());
            $slider->fillable($request->all());
            $slider->save();
            //Post::created($request->all());
            return redirect() -> route('slider');
        }
        $slider['images'] = "" ;
        //dd($_POST); tương đương dd($request->all());
        $slider->fillable($request->all());
        $slider->save();
        //Post::created($request->all());
        return redirect() -> route('slider');
    }



    // EDIT SLIDER
    // get form news slider edit
    public function edit($id) {
        $model = Slider::find($id);
        return view('admin/slider/edit',[
            'model' => $model
        ]);
    }

    // save news slider edit
    public function save_edit(Request $request, $id) {
        $slider = Slider::find($id);
        $slider['images'] = $request->images;
        $slider['status'] = $request->status;
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_image_name));
            $new_images = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();

            $get_image->move('images',$new_images);
            $slider['images'] = $new_images;
            $slider->images = $new_images;
            //dd($_POST); tương đương dd($request->all());
            $slider->fillable($request->all());
            $slider->save();
            //Post::created($request->all());
            return redirect() -> route('slider');
        }
        $slider['images'] = "" ;
        //dd($_POST); tương đương dd($request->all());
        $slider->fillable($request->all());
        $slider->save();
        //Post::created($request->all());
        return redirect() -> route('slider');
    }


    // DELETE SLIDERS
    public function delete($id) {
        // trong laravel có hỗ trợ hàm delete
        Slider::find($id)->delete();
        // sau khi xóa xong có thể dùng redirect để chuyển hướng đến trang nào đó qua route hoặc dùng back để quay lại trang
        return redirect() -> back();
    }

    // VIEW SLIDER
    public function index() {
        // $post = Post::all();  // select * from posts
        $slider = Slider::paginate(1); // select * form limit 0,5 (phân trang và limit hiển thị là 5)
        return view('admin/slider/index',[
            'sliders' => $slider,
        ]);
    }
}
