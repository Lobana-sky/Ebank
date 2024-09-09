<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\CardOrder;
use Illuminate\Support\Facades\DB;

class CardOrderController extends Controller
{
    public function index()
    {
        // $cardOrders=DB::table('card_orders')->select('*')->orderBy('id', 'desc')->paginate(500);
        $cardOrders = DB::table('card_orders')
            ->join('users', 'card_orders.user_id', '=', 'users.id')
            ->join('cards', 'card_orders.card_id', '=', 'cards.id')
            ->select('card_orders.*', 'users.name as user_name', 'cards.name as card_name')
            ->get();
        return view('backend.card.cardOrders.index', compact('cardOrders'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        CardOrder::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request,  $id)
    {
        $cardOrder = CardOrder::findOrFail($id);
        $input = $request->all();
        $cardOrder->update($input);
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy( $id)
    {
        $cardOrder= CardOrder::findOrFail($id);
        $cardOrder->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
