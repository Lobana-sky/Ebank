<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Vip;
use Illuminate\Support\Facades\DB;

class VipController extends Controller
{
    public function index()
    {
        $vips=DB::table('vips')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.vips.index', compact('vips'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Vip::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
        $vip = Vip::findOrFail($id);
        $input = $request->all();
       
        $vip->update([
           'role_name' => $input['role_name'],
           'commession_percent' => $input['commession_percent'],
        ]);
        
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy(string $id)
    {
        $vip= Vip::findOrFail($id);
        $vip->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
