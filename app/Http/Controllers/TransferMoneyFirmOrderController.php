<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\TransferMoneyFirmOrder;
use Illuminate\Support\Facades\DB;

class TransferMoneyFirmOrderController extends Controller
{
    public function index()
    {
        // $transferMoneyFirmOrders=DB::table('transfer_money_firm_orders')->select('*')->orderBy('id', 'desc')->paginate(500);
        $transferMoneyFirmOrders = DB::table('transfer_money_firm_orders')
            ->join('users', 'transfer_money_firm_orders.user_id', '=', 'users.id')
            ->join('transfer_money_firms', 'transfer_money_firm_orders.transfer_money_firm_id', '=', 'transfer_money_firms.id')
            ->select('transfer_money_firm_orders.*', 'users.name as user_name', 'transfer_money_firms.name as transfer_money_firm_name')
            ->get();
        return view('backend.transferMoneyFirm.transferMoneyFirmOrders.index', compact('transferMoneyFirmOrders'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $input = $request->all();
       
        TransferMoneyFirmOrder::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function show( $id)
    {
    }

    public function edit( $id)
    {
    }

    public function update(Request $request,  $id)
    {
        $transferMoneyFirmOrder = TransferMoneyFirmOrder::findOrFail($id);
        $input = $request->all();
        
        $transferMoneyFirmOrder->update( $input);
        
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy( $id)
    {
        $transferMoneyFirmOrder= TransferMoneyFirmOrder::findOrFail($id);
        $transferMoneyFirmOrder->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
