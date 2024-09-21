<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiProgramController extends Controller
{
    
    public function index()
    { 
        $programs=DB::table('programs')->select('*')->orderBy('id', 'desc')->paginate(500);
        return response()->json(['programs'=>$programs]);
    }
    public function show($id)
    {
       $program = Program::findOrFail($id);
       return response()->json(['program'=>$program ]);
    }
}
