<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KateringController extends Controller
{
    public function index(){
        return view('katering/index');
    }

    public function contact(){
        return view('katering/contact');
    }

    public function about(){
        return view('katering/about');
    }

    public function menu(){
        return view('katering/menu');
    }
}
