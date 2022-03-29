<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use App\Models\Admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
            public function homepage()
            {
            $admins = Admin::find(1);
                return view('development', ['admin' => $admins]);
            }
            public function aboutus(){
                return view('aboutus');
            }
            public function donate(){
                return view('donate');
            }
            public function projecten(){
                return view('projecten');
            }
            public function contact(){
                return view('contact');
            }
}
