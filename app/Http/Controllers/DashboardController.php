<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function profile(){
        return view('dashboard-profile');
    }
    public function todooverzicht(){
                    $todos = Todo::all();
                    return view('dashboard-todo-overzicht', ['todos' => $todos]);
                }
}
