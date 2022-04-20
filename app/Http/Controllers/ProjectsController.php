<?php

namespace App\Http\Controllers;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function inputcreation( Request $request){

        //Hier de benodigdheden opslaan
        $projectdata = $request->validate([
            'title' => 'required|min:3',
            'description_1' => 'required|min:10',
            'afbeelding' => 'image'
        ]);

        //Hier alle opties opslaan
        $projectDescription_2 = $request->input('description_2');
        $projectDescription_3 = $request->input('description_3');

        $newFilename = $projectdata['afbeelding']->store('fotos', 'public');
        $projectdata['afbeelding'] = $newFilename;

        //Alle info halen om een Admin te migraten
        $project = new Projects ();
        //Laat zien welke informatie je wilt zien
        $project->title = $projectdata['title'];
        $project->description_1 = $projectdata['description_1'];
        $project->description_2 = $projectDescription_2;
        $project->description_3 = $projectDescription_3;
        $project->afbeelding = $projectdata['afbeelding'];

        $project->save();

        //Hier alle gegevens opslaan die je krijgt van admin-create


        return view('projecten');
    }
}
