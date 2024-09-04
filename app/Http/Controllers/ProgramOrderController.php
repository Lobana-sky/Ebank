<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\ProgramOrder;
use Illuminate\Support\Facades\DB;

class ProgramOrderController extends Controller
{
    public function index()
    {
        $programOrders=DB::table('program_orders')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.program.programOrders.index', compact('programOrders'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        ProgramOrder::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request,  $id)
    {
        $programOrder = ProgramOrder::findOrFail($id);
        $input = $request->all();
        $programOrder->update($input);
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy( $id)
    {
        $programOrder= ProgramOrder::findOrFail($id);
        $programOrder->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
