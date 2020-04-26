<?php

namespace App\Http\Controllers\Customer;
use App\Models\WebSetting;
use App\Models\About;
use App\Models\Service;
use App\Models\Room_type;
use App\Models\Slider;
use App\Models\Post;
use App\Models\Booking;
use App\Models\ClientContact;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomePageController extends Controller
{

    /* DASHBOARD INDEX */
    public function homepage(Request $request) {
        $settings = WebSetting::all();
        $abouts = About::all();
        $services = Service::where('status',1)->get();
        $room_types = Room_type::orderby('created_at','desc')->limit(3)->get();
        $sliders = Slider::where('status',1)->orderby('created_at','desc')->limit(2)->get();
        //dd($sliders);die;
        //dd( $room_types);die;
        //dd($services);die;
        //dd($services);die;
        // mình đang muốn hiển thị với satus = 1
        return view('customer.pages.homepage',compact('settings','abouts','services','room_types','sliders'));
    }


    /* ROOM INDEX */

    //Room list index
    public function room_list(Request $request) {
        $settings = WebSetting::all();
        $abouts = About::all();
        $room_types = Room_type::paginate(5);
        //dd($room_types);die;
        return view('customer.pages.room-list',compact('settings','abouts','room_types'));
    }

    //Room view index
    public function room($id) {
        $settings = WebSetting::all();
        $abouts = About::all();
        $room_types = Room_type::find($id);
        $room_type = Room_type::limit(3)->get();
        $posts = Post::where('status',1)->paginate(4);
        //dd($room_type);die;
        //dd($room_types);die;
        return view('customer.pages.room',compact('settings','abouts','room_types','room_type','posts'));
    }


    /* BLOG INDEX */

    //Blog list index
     public function blog() {
        $settings = WebSetting::all();
        $abouts = About::all();
        $posts = Post::where('status',1)->paginate(4);
        //dd($posts);die;
        return view('customer.pages.post-list',compact('settings','abouts','posts'));
    }

    //Blog view index
    public function blog_view($id) {
        $settings = WebSetting::all();
        $abouts = About::all();
        $posts = Post::find($id);
        $post = Post::where('status',1)->paginate(4);
        //dd($room_type);die;
        //dd($room_types);die;
        return view('customer.pages.post',compact('settings','abouts','posts','post'));
    }


     /* ABOUT INDEX */

    public function about() {
        $settings = WebSetting::all();
        $abouts = About::all();
        return view('customer.pages.about',compact('settings','abouts'));
    }


     /* CONTACT INDEX */
    public function contact() {
        $settings = WebSetting::all();
        $abouts = About::all();
        return view('customer.pages.contact',compact('settings','abouts'));
    }


    /* BOOKING INDEX */

    // Booking get form
    public function booking() {
        $settings = WebSetting::all();
        $abouts = About::all();
        $room_types = Room_type::all();
        $room_detais = Room_type::orderby('created_at','desc')->limit(3)->get();
        //dd($room_detais);die;
        return view('customer.pages.booking',compact('settings','abouts','room_types','room_detais'));
    }

    // Booking post form
    public function save_booking(Request $request) {
        $this->validate($request,[
            // nguyên tắc chỉ định
            'name' => 'required',
            'email' => 'required',
            'number_phone' => 'required',
            'country' => 'required',
            'arrival_date' => 'required',
            'departure_date' => 'required'
        ]);

        $booking = Booking::join('room_types','room_types.id','=','bookings.room_type_id')->create($request->all());
        //dd($booking);die;
        return redirect()->back()->with('message', 'Bạn đã đặt phòng thành công');
    }

    /* CONTACT INDEX */

    // Contact get form
    public function contact_client() {
        return view('customer.pages.homepage')->with('customer.pages.contact');
    }

    // Contact post form
    public function contact_client_save(Request $request) {
        $this->validate($request,[
            // nguyên tắc chỉ định
            'name' => 'required',
            'email' => 'required',
            'messenger' => 'required'
        ]);
        $contact = ClientContact::create($request->all());
        return redirect()->back()->with('message', 'Bạn đã gửi phản hồi thành công');
    }

}
