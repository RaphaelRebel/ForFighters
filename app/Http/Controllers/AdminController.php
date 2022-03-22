<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{


            public function adminoverzicht(){
                    $admins = Admin::paginate(10);
                    return view('admin-overzicht', ['admin' => $admins]);
                }


            public function admincreate(){
                return view('admin-create');
                }

                public function projectsingle($id){
                        $admins = Admin::find($id);
                        return view ('project-single', ['admins' => $admins]);
                    }


            public function inputcreation( Request $request){

                    //Hier de benodigdheden opslaan
                 $admindata = $request->validate([
                        'title' => 'required|min:3',
                        'aboutus' => 'required|min:10'
                    ]);

                    //Alle info halen om een Admin te migraten
                    $admin = new Admin ();
                    //Laat zien welke informatie je wilt zien
                    $admin->title= $admindata['title'];
                    $admin->aboutus= $admindata['aboutus'];

                    $admin->save();

                    //Hier alle gegevens opslaan die je krijgt van admin-create


                    return 'GEGEVENS IN DE DATABASSE OPSLAAN';
                }
}
