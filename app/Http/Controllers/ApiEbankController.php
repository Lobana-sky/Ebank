<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ApiEbankController extends Controller
{
    public function index()
    { 
        $ebanks=DB::table('ebanks')->select('*')->orderBy('id', 'desc')->paginate(500);
        $ebankSections=DB::table('ebank_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return response()->json(['ebanks'=>$ebanks, 'ebank_sections'=>$ebankSections]);
    }
}
