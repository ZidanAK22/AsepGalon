<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function about() 
    {
        return view('about');
    }

    public function product()
    {
        return view('product');
    }
}
