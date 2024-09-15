<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiTransferMoneyFirmController extends Controller
{
    public function index()
    {
        $transferMoneyFirms=DB::table('transfer_money_firms')->select('*')->orderBy('id', 'desc')->paginate(500);
        return response()->json(['transfer_money_firms'=>$transferMoneyFirms]);
    }
}
