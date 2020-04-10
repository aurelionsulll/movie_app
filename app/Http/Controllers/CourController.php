<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prof;
use App\Cour;
use App\Classe;

class CourController extends Controller
{
    public function index()
    {
       return view('cour.cour');
    }

    public function createCour(Request $request)
    {
        $validateData = $request -> validate([
            'name' => 'required',
            'prof_id' => '',
            'classe_id' => '',
        ]);

        $cours= Cour::create($validateData);

        $cours->save();
    
    }

    public function createCourView()
    {
        $profs = Prof::all();
        $classes = Classe::all();
        return view ('cour.createCour')->with('profs',$profs)->with('classes',$classes);
    }

}
