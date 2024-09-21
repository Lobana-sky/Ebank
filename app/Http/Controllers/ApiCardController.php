<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiCardController extends Controller
{
    public function index()
    { 
        $cards=DB::table('cards')->select('*')->orderBy('id', 'desc')->paginate(500);
        return response()->json(['cards'=>$cards]);
    }

    public function show($id)
    {
       $card = Card::findOrFail($id);
       return response()->json(['card'=>$card]);
    }
}
