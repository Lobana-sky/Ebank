<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiEcardController extends Controller
{
    public function index()
    { 
        $ecards=DB::table('ecards')->select('*')->orderBy('id', 'desc')->paginate(500);
        $ecardsSections=DB::table('ecard_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return response()->json(['ecards'=>$ecards,'ecardsSections'=> $ecardsSections]);
    }
}
