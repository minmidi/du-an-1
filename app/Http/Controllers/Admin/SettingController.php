<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\WebSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

    // EDIT SETTING
    // get form news setting edit
    public function edit($id) {
        $model = WebSetting::find($id);
        return view('admin/setting/edit',[
            'model' => $model
        ]);
    }

    // save news setting edit
    public function save_edit(Request $request, $id) {
        $this->validate($request,[
            // nguyên tắc chỉ định
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'hotline' => 'required',
            'address' => 'required',
            'map_url' => 'required',
            'youtube_url' => 'required',
            'facebook_url' => 'required',
            'intro_video_url' => 'required',
            'description' => 'required'
        ]);
        //$request->offsetUnset('_token');
        $setting = WebSetting::find($id);
        //dd($setting);die;
        $setting['name'] = $request->name;
        $setting['logo'] = $request->logo;
        $setting['phone_number'] = $request->phone_number;
        $setting['email'] = $request->email;
        $setting['hotline'] = $request->hotline;
        $setting['address'] = $request->address;
        $setting['map_url'] = $request->map_url;
        $setting['youtube_url'] = $request->youtube_url;
        $setting['facebook_url'] = $request->facebook_url;
        $setting['intro_video_url'] = $request->intro_video_url;
        $setting['description'] = $request->description;
        $get_logo = $request->file('logo');
        if ($get_logo) {
            $get_logo_name = $get_logo->getClientOriginalName();
            $name_logo = current(explode('.',$get_logo_name));
            $new_logo = $name_logo.rand(0,99).'.'.$get_logo->getClientOriginalExtension();
            $get_logo->move('images',$new_logo);
            $setting['logo'] = $new_logo;
            $setting->logo = $new_logo;
            $setting->fillable($request->all());
            $setting->save();
            return redirect() -> route('setting');
        } else {
            $setting['logo'] = "";
            $setting->fillable($request->all());
            $setting->save();
            return redirect()->route('setting');
        }
    }


    // VIEW SETTING
    public function index() {
        $setting = WebSetting::all();
//        $setting = WebSetting::paginate(1);
        return view('admin/setting/index',[
            'settings'=> $setting
        ]);
    }
}
