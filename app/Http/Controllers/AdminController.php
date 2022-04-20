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




    public function adminsingle($id){
        $admins = Admin::find($id);
        return view ('admin-single', ['admin' => $admins]);
    }

    public function adminedit($id)
    {
        $admins = Admin::find($id);

        return view('admin-edit', ['admin' => $admins]);
    }

    public function adminupdate(Request $request, $id){

        //Haal alle todos op
        $admins = Admin::find($id);

        $admindata = $request->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:10',
            'afbeelding' => 'image'
        ]);

        $newFilename = $admindata['afbeelding']->store('fotos', 'public');
        $admindata['afbeelding'] = $newFilename;


        // Haal de update requests
        $adminTitle = $admindata['title'];
        $adminDescription = $admindata['description'];
        $adminAfbeelding = $admindata['afbeelding'];

        $admins->title = $adminTitle;
        $admins->description = $adminDescription;
        $admins->afbeelding = $adminAfbeelding;

        $admins->save();

        // Stop de updates in de database (Code kan beter worden)

        return redirect('admin/' . $id)->with('Succes', 'Data updates');
    }
}
