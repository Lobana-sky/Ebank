<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use Illuminate\Support\Facades\DB;


class ApiAppController extends Controller
{
    public function index()
    {
       $apps=DB::table('apps')->select('*')->orderBy('id', 'desc')->paginate(500);
       $appSections=DB::table('app_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
       return response()->json(['apps'=>$apps, 'app_sections'=> $appSections ]);
    }
}
