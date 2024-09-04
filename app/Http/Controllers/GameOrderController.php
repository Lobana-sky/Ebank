<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameOrder;
use Illuminate\Support\Facades\DB;

class GameOrderController extends Controller
{
    public function index()
    {
        $gameOrders=DB::table('game_orders')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.game.gameOrders.index', compact('gameOrders'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        GameOrder::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request,  $id)
    {
        $gameOrder = GameOrder::findOrFail($id);
        $input = $request->all();
        $gameOrder->update($input);
        
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy( $id)
    {
        $gameOrder= GameOrder::findOrFail($id);
        $gameOrder->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
