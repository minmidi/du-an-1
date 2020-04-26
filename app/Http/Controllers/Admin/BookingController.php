<?php

namespace App\Http\Controllers\Admin;
use App\Models\Booking;
use App\Models\Room_type;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index() {
        $booking = Booking::orderby('created_at','desc')->search('name','email','number_phone')->paginate(1);
        return view('admin.booking.index',[
            'bookings' => $booking
        ]);
    }

    public function delete($id) {
        $bookings = Booking::find($id);

        //dd($room_service);die;
        $bookings->delete();
        //return redirect() -> back();
        // sau khi xóa xong có thể dùng redirect để chuyển hướng đến trang nào đó qua route hoặc dùng back để quay lại trang
        return redirect()->route('booking_room');
    }
}
