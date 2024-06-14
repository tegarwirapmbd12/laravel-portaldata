<?php

namespace App\Http\Controllers;

use App\Models\Metadata;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function metadata(){
        $metadatas = Metadata::all();
        return response()->json($metadatas);
    }
}
