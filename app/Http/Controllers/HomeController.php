<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome(){
        return 'HOMEPAGE';
        }

       public function homepage(){
            return view('development');
        }
}
