<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiProgramController extends Controller
{
    
    public function index()
    { 
        $programs=DB::table('programs')->select('*')->orderBy('id', 'desc')->paginate(500);
        return response()->json(['programs',$programs]);
    }
}
