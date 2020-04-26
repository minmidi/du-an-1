<?php

namespace App\Http\Controllers\Admin;
use App\Models\ClientContact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contact = ClientContact::orderby('created_at','desc')->search('name','email')->paginate(1);
        return view('admin.contact.index',[
            'contacts' => $contact
        ]);
    }

    public function delete($id) {
        $contacts = ClientContact::find($id);

        //dd($room_service);die;
        $contacts->delete();
        //return redirect() -> back();
        return redirect()->route('contact_client');
    }
}
