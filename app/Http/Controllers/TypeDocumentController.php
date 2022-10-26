<?php

namespace App\Http\Controllers;

use App\Models\TypeDocument;
use Illuminate\Http\Request;

class TypeDocumentController extends Controller
{
    protected function show()
    {
        $typesDocuments = TypeDocument::all();

        return response()->json($typesDocuments);
    }
}
