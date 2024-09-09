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
        // $dataOrders=DB::table('data_communication_orders')->select('*')->orderBy('id', 'desc')->paginate(500);
        $dataOrders = DB::table('data_communication_orders')
            ->join('users', 'data_communication_orders.user_id', '=', 'users.id')
            ->join('data_communications', 'data_communication_orders.data_communication_id', '=', 'data_communications.id')
            ->select('data_communication_orders.*', 'users.name as user_name', 'data_communications.name as data_name')
            ->get();
        return view('backend.data.dataOrders.index', compact('dataOrders'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        DataCommunicationOrder::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request,  $id)
    {
        $dataOrders = DataCommunicationOrder::findOrFail($id);
        $input = $request->all();
        $dataOrders->update($input);
        
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy( $id)
    {
        $dataOrders= DataCommunicationOrder::findOrFail($id);
        $dataOrders->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
