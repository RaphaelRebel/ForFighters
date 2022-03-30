<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use App\Models\Admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
            public function homepage()
            {
            $admins = Admin::where('code', 'aboutus')->first();
                return view('development', ['admin' => $admins]);
            }
            public function aboutus(){
                $admins = Admin::where('code', 'aboutus')->first();
                return view('aboutus', ['admin' => $admins]);
            }
            public function donate(){

                $donation = Admin::where('code', 'donation')->first();
                return view('donate', ['donatie' => $donation]);
            }
            public function projecten(){
                return view('projecten');
            }
            public function contact(){
                return view('contact');
            }
}
