<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function home()
    {
        return view('myportfolio');
    }
       public function myprofile()
    {
        return view('myprofile');
    }
     public function about()
    {
        return view('about');
    }
     public function contact()
    {
        return view('contact');
    }
}