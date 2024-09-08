<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\DataCommunicationOrder;
use Illuminate\Support\Facades\DB;

class DataCommunicationOrderController extends Controller
{
    public function index()
    {
        $dataOrders=DB::table('data_communication_orders')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.data.dataOrders.index', compact('dataOrders'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        DataOrder::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request,  $id)
    {
        $dataOrders = DataOrder::findOrFail($id);
        $input = $request->all();
        $dataOrders->update($input);
        
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy( $id)
    {
        $dataOrders= DataOrder::findOrFail($id);
        $dataOrders->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
