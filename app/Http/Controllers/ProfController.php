<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classe;

class ProfController extends Controller
{
    public function index()
    {
        return view('prof.prof');
    }

    public  function createClasse(Request $request)
    {   
        $validateData = $request->validate([
            'name' => 'required',
        ]);
        $classes = Classe::create($validateData);
    }
}
