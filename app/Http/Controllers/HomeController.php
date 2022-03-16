<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
            public function homepage()
            {
                return view('development');
            }
            public function aboutus(){
                return view('aboutus');
            }
            public function donate(){
                return view('donate');
            }
}
