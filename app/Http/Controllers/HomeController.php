<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use App\Models\Admin;
use App\Models\Projects;
use Illuminate\Http\Request;

class HomeController extends Controller
{
            public function homepage()
            {
            $projecten = Projects::orderBy('created_at', 'desc')->paginate(3);
            $admins = Admin::where('code', 'aboutus')->first();
                return view('development', ['admin' => $admins, 'projecten' => $projecten]);
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
                $project = Projects::orderBy('created_at', 'desc')->paginate(10);
                return view('projecten', ['project' => $project]);
            }

            public function vrijwilligers(){
                return view('vrijwilligers');
            }
            public function contact(){
                return view('contact');

            }
}
