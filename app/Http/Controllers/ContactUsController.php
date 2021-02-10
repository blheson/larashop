<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactUsController extends Controller
{ /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    */
    public function store(Request $request){
        $contact = new Contact;
        $contact->name= $request->name;
        $contact->phone= $request->phone;
        $contact->email= $request->email;
        $contact->message= $request->message;
        $contact->save();
        flashSession($contact, 'message successfully sent', 'there was an error');
        return $this->index();
    }
    /* Store a newly created resource in storage.
    *
    * @return  \Illuminate\Http\Request  $request
    */
    public function index(){
            return view('/contact');
    }
}
