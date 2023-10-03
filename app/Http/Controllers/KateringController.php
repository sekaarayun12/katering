<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KateringController extends Controller
{
    public function index(){
        return view('katering/index');
    }
}
