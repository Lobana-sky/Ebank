<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiSliderController extends Controller
{
    public function index()
    {
        $slider=DB::table('sliders')->select('*')->orderBy('id', 'desc')->paginate(500);
        return response()->json(['slider'=>$slider]);
    }
}
