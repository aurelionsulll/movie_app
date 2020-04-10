<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Document;

class DocumentController extends Controller
{
    function createDocument(Request $request)

    {
        $documents = new Document();

        $validateData = $request->validate([
            'name' => 'required',
            'path' => '',
        ]);

        $documents->name = $request->input('name');
        $request->path->store('path');
        $documents->save();
        redirect('');
    }

    function createDocumentView()
    {   

        return view('cour.createDocument');
    }
}
