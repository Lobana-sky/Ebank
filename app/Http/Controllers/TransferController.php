<?php

namespace App\Http\Controllers;
use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransferController extends Controller
{
    public function index()
    { 
        $transfers=DB::table('transfers')->select('*')->orderBy('id', 'desc')->paginate(500);
        
        return view('backend.transfer.transfers.index', compact('transfers'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        
        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
                $name = 'transfer'.time().$file->getClientOriginalName();
                $file->move('assets/images/transfer/', $name);
                $input['image'] = $name;
            }
        }
        else
        {
            $input['image']= "";
        }
         Transfer::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request, string $id)
    {
        $transfer = Transfer::findOrFail($id);
        $input = $request->all();
        if($request->file('image')!="")
        {
           if ($file = $request->file('image')) {
               $name = 'transfer'.time().$file->getClientOriginalName();
               $file->move('assets/images/transfer/', $name);
               $input['image'] = $name;
            }
        }
        else
        {
            $input['image']= $transfer['image'];
        }
        $transfer->update($input);
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy(string $id)
    {
        $transfer= Transfer::findOrFail($id);
        $transfer->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
