<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ebank;
use Illuminate\Support\Facades\DB;

class EbankController extends Controller
{
    public function index()
    { 
        $ebanks=DB::table('ebanks')->select('*')->orderBy('id', 'desc')->paginate(500);
        
        $ebanks_sections=DB::table('ebank_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.ebank.ebanks.index', compact('ebanks','ebanks_sections'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        
        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
                $name = 'ebank'.time().$file->getClientOriginalName();
                $file->move('assets/images/ebanks/', $name);
                $input['image'] = $name;
            }
       }
       else
       {
            $input['image']= "";
       }
        Ebank::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request, string $id)
    {
        $ebank = Ebank::findOrFail($id);
        $input = $request->all();
       
        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
                $name = 'ebank'.time().$file->getClientOriginalName();
                $file->move('assets/images/ebanks/', $name);
                $input['image'] = $name;
            }
        }
        else
        {
            $input['image']= $ebank['image'];
        }
        $ebank->update($input);
       
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy(string $id)
    {
        $ebank= Ebank::findOrFail($id);
        $ebank->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }

}
