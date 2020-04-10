<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use App\Classe;
use App\Prof;

class ProfController extends Controller
{
    public function index()
    {
       return view('prof.prof');
    }

    // create class
    public  function createClasse(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
        ]);
        $classes = Classe::create($validateData);
        $classes->save();
        redirect('prof.createClasse');
    }
    public function createClasseView()
    {
        return view('prof.createClasse');
    }

    //create prof

    public function createProf(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);
        
        $profs = Prof::create($validateData);
        $profs->save();
        redirect('prof.createProf');
    }

    public function createProfView()
    {
        return view('prof.createProf');
    }

    }

    