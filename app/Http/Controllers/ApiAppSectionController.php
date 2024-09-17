<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AppSection;
use App\Models\App;

class ApiAppSectionController extends Controller
{
    public function index()
    {
       $appSections=DB::table('app_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
       return response()->json(['app_sections'=> $appSections ]);
    }

    public function getApps(string $section_id)
    {
       $section = AppSection::find($section_id);
       $apps = $section->apps;
    //    $apps = App::with('appSection')->find($section_id);
       return response()->json(['apps'=> $apps ]);
    }
}
