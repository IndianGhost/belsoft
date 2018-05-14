<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function home(){
        return view('Pages.home');
    }

    public function about(){
        return view('Pages.about');
    }

    public function blog(){
        return view('Pages.blog');
    }

    public function contact(){
        return view('Pages.contact');
    }
}
