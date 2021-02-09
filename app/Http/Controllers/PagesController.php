<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        return view('home', ['homepage', true]);
    }

    public function about()
    {
        $title = 'About us';
        return view('about', ['title'=>$title]);
    }
    public function admin()
    {
        return view('admin');
    }
    public function checkout()
    {
        return view('checkout');
        // return view('about');

        // echo 'here';
    }
    public function check()
    {
        return view('checkout');
        // return view('about');

        // echo 'here';
    }
    public function cart()
    {
        return view('cart');
    }
}
