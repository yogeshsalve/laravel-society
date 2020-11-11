<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactusController extends Controller
{
    public function contactus()
    {
        return view('/pages.contactus');
    
    }

    public function addContact(Request $request)
    {
        $contact = new Contact;
        $contact->contact_name= $request->contact_name;
        $contact->contact_email= $request->contact_email;
        $contact->contact_no= $request->contact_no;
        $contact->contact_subject=$request->contact_subject;
        $contact->contact_message=$request->contact_message;
        $contact->save();
        return redirect('/contactus');
        
    }
}
