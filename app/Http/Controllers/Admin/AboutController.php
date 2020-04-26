<?php

namespace App\Http\Controllers\Admin;
use App\Models\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public  function __construct()
    {
        Auth::check();
    }
    // EDIT ABOUT
    // get form about edit
    public function edit($id) {
        $model = About::find($id);
        return view('admin/about/about-edit',[
            'model' => $model
        ]);
    }

    // save about edit
    public function save_edit(Request $request, $id) {
        $this->validate($request,[
            // nguyên tắc chỉ định
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required'
        ]);

        $about = About::find($id);
        $about['title'] = $request->title;
        $about['images'] = $request->images;
        $about['short_description'] = $request->short_description;
        $about['description'] = $request->description;
        $get_image = $request->file('images');
        if ($get_image) {
            $get_image_name = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_image_name));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('images',$new_image);
            $about['images'] = $new_image;
            $about->images = $new_image;
            $about->fillable($request->all());
            $about->save();
            return redirect() -> route('abouts');
        } else {
            $about['images'] = "";
            $about->fillable($request->all());
            $about->save();
            return redirect()->route('abouts');
        }
    }
    // VIEW ABOUT
    public function index() {
        $about = About::all();
        return view('admin/about/about-index',[
            'abouts'=> $about
        ]);
    }
}
