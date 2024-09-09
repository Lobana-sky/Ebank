<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\EbankOrder;
use Illuminate\Support\Facades\DB;

class EbankOrderController extends Controller
{
    public function index()
    {
        // $ebankOrders=DB::table('ebank_orders')->select('*')->orderBy('id', 'desc')->paginate(500);
        $ebankOrders = DB::table('ebank_orders')
            ->join('users', 'ebank_orders.user_id', '=', 'users.id')
            ->join('ebanks', 'ebank_orders.ebank_id', '=', 'ebanks.id')
            ->select('ebank_orders.*', 'users.name as user_name', 'ebanks.name as ebank_name')
            ->get();
        return view('backend.ebank.ebankOrders.index', compact('ebankOrders'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        EbankOrder::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request,  $id)
    {
        $ebankOrder = EbankOrder::findOrFail($id);
        $input = $request->all();
        $ebankOrder->update($input);
        
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy( $id)
    {
        $ebankOrder= EbankOrder::findOrFail($id);
        $ebankOrder->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
