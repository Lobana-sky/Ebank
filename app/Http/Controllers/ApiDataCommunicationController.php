<?php

namespace App\Http\Controllers;

use App\Models\DataCommunication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ApiDataCommunicationController extends Controller
{
    public function index()
    { 
        $dataCommunications=DB::table('data_communications')->select('*')->orderBy('id', 'desc')->paginate(500);
        return response()->json(['dataCommunications'=>$dataCommunications ]);
    }

    public function show($id)
    {
       $dataCommunication = DataCommunication::findOrFail($id);
       return response()->json(['dataCommunication'=>$dataCommunication]);
    }
}
