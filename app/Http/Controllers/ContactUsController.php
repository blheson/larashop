<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{ /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    */
    public function store(Request $request){
        echo $request;
        var_dump(session()->get('all'));
    }
    public function index(){
            return view('contact');
        
    }
}
