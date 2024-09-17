<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EbankSection;

class ApiEbankSectionController extends Controller
{
    public function index()
    {
       $ebankSections=DB::table('ebank_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
       return response()->json(['ebank_sections'=> $ebankSections ]);
    }

    public function getApps(string $section_id)
    {
       $section = EbankSection::find($section_id);
       $ebanks = $section->apps;
       return response()->json(['ebanks'=> $ebanks ]);
    }
}
