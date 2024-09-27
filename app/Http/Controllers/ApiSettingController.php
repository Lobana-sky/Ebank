<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiSettingController extends Controller
{
    public function index()
    {
        $setting=DB::table('settings')->select('*')->orderBy('id', 'desc')->first();
        return response()->json(['setting'=>$setting]);
    }
}
