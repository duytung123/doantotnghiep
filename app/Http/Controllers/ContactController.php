<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
   		$data['contactList']= Contact::all();
   		return view('backend.Contact.Contact',$data);
    }
    public function delete($id)
    {
    	Contact::destroy($id);
      return back();
    }
    public function active($id)
    {
      $contactList = Contact::find($id);
      $contactList->ct_status= Contact::STATUS_PRIVATE;
      $contactList->save();
      return back();
    }
}
