<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\AppOrder;
use Illuminate\Support\Facades\DB;

class AppOrderController extends Controller
{
    public function index()
    {
        // $appOrders=DB::table('app_orders')->select('*')->orderBy('id', 'desc')->paginate(500);
        // Retrieve all appOrders with related users and apps
        $appOrders = DB::table('app_orders')
            ->join('users', 'app_orders.user_id', '=', 'users.id')
            ->join('apps', 'app_orders.app_id', '=', 'apps.id')
            ->select('app_orders.*', 'users.name as user_name', 'apps.name as app_name')
            ->get();

        // Pass the data to the view
        return view('backend.app.appOrders.index', compact('appOrders'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        AppOrder::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request,  $id)
    {
        $appOrder = AppOrder::findOrFail($id);
        $input = $request->all();
       
        $appOrder->update($input);
        
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy( $id)
    {
        $appOrder= AppOrder::findOrFail($id);
        $appOrder->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
