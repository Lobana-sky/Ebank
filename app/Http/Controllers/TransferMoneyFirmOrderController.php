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
        $transferMoneyFirmOrders=DB::table('transfer_money_firm_orders')->select('*')->orderBy('id', 'desc')->paginate(500);
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
