<?php

namespace App\Http\Controllers;

use App\Models\Ecard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiEcardController extends Controller
{
    public function index()
    { 
        $ecards=DB::table('ecards')->select('*')->orderBy('id', 'desc')->paginate(500);
        return response()->json(['ecards'=>$ecards]);
    }
   
    public function show($id)
    {
       $ecard = Ecard::findOrFail($id);
       return response()->json(['ecard'=>$ecard ]);
    }
}
