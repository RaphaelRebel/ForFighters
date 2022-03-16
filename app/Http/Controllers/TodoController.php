<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function todooverzicht(){
        $todos = Todo::paginate(10);
        return view('dashboard-todo-overzicht', ['todos' => $todos]);
    }

    public function todocreate(){
    return view('dashboard-todo-create');
    }

    public function store(Request $request){
        dd($request);
    }
}
