<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesDriver extends Controller
{
    public function HomePage(){
        return view('home');
    }

    public function ContactPage(){
        return view('contact');
    }

    public function ProductsPage(){
        return view('index');
    }
}
