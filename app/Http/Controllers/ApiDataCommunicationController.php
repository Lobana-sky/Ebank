<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ApiDataCommunicationController extends Controller
{
    public function index()
    { 
        $data_communications=DB::table('data_communications')->select('*')->orderBy('id', 'desc')->paginate(500);
        return response()->json(['data_communications'=>$data_communications ]);
    }
}
