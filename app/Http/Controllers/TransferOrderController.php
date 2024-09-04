<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransferOrder;
use Illuminate\Support\Facades\DB;

class TransferOrderController extends Controller
{
    public function index()
    {
        $transferOrders=DB::table('transfer_orders')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.transfer.transferOrders.index', compact('transferOrders'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        TransferOrder::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request,  $id)
    {
        $transferOrder = TransferOrder::findOrFail($id);
        $input = $request->all();
        $transferOrder->update($input);
        
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy( $id)
    {
        $transferOrder= TransferOrder::findOrFail($id);
        $transferOrder->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
