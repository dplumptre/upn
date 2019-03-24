<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }







    public function index()
    {
        return view('welcome');
    }
    

    public function about()
    {
        return view('about');
    }



    public function event()
    {
        return view('event');
    }



    public function contact()
    {
        return view('contact');
    }




}
