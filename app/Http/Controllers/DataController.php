<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    
    public function index()
    { 
        $datas=DB::table('datas')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.data.datas.index', compact('datas'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
      
        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
                $name = 'data'.time().$file->getClientOriginalName();
                $file->move('assets/images/data/', $name);
                $input['image'] = $name;
            } 
        }
        else
        {
           $input['image'] ="";
        }
         
        Data::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request, string $id)
    {
        $data = Data::findOrFail($id);
        $input = $request->all();
       
        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
                $name = 'data'.time().$file->getClientOriginalName();
                $file->move('assets/images/data/', $name);
                $input['image'] = $name;
            } 
        }
        else
        {
            $input['image'] =$data['image'];
        }
        $data->update($input);
       
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy(string $id)
    {
        $data= Data::findOrFail($id);
        $data->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
