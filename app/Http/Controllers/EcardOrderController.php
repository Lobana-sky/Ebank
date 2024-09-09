<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EcardOrder;
use Illuminate\Support\Facades\DB;

class EcardOrderController extends Controller
{
    public function index()
    {
        $ecardOrders=DB::table('ecard_orders')->select('*')->orderBy('id', 'desc')->paginate(500);
        $ecardOrders = DB::table('ecard_orders')
        ->join('users', 'ecard_orders.user_id', '=', 'users.id')
        ->join('ecards', 'ecard_orders.ecard_id', '=', 'ecards.id')
        ->select('ecard_orders.*', 'users.name as user_name', 'ecards.name as ecard_name')
        ->get();
        return view('backend.ecard.ecardOrders.index', compact('ecardOrders'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        EcardOrder::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request, $id)
    {
        $ecardOrder = EcardOrder::findOrFail($id);
        $input = $request->all();
        $ecardOrder->update($input);
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy($id)
    { 
        $ecardOrder= EcardOrder::findOrFail($id);
        
        $ecardOrder->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
