<?php

namespace App\Http\Controllers;

use App\Models\TransferMoneyFirm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiTransferMoneyFirmController extends Controller
{
    public function index()
    {
        $transferMoneyFirms=DB::table('transfer_money_firms')->select('*')->orderBy('id', 'desc')->paginate(500);
        return response()->json(['transferMoneyFirms'=>$transferMoneyFirms]);
    }

    public function show($id)
    {
       $transferMoneyFirm = TransferMoneyFirm::findOrFail($id);
       return response()->json(['transferMoneyFirm'=>$transferMoneyFirm]);
    }
}
