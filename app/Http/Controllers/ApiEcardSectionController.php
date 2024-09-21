<?php

namespace App\Http\Controllers;

use App\Models\EcardSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiEcardSectionController extends Controller
{
    public function index()
    {
       $ecardSections=DB::table('ecard_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
       return response()->json(['ecardSections'=> $ecardSections ]);
    }

    public function getEcards(string $section_id)
    {
       $section = EcardSection::find($section_id);
       $ecards = $section->ecards;
       return response()->json(['ecards'=> $ecards ]);
    }
}
