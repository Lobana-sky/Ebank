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
        
        $ebankSections=DB::table('ebank_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.ebank.ebanks.index', compact('ebanks','ebankSections'));
    }

    public function showCategory($id)
    {
        $ebanks=DB::table('ebanks')->select('*')->where('section_id',$id)->orderBy('id', 'desc')->paginate(500);
   
        $ebankSections=DB::table('ebank_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.ebank.ebanks.index',compact('ebanks','ebankSections'));
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
    public function showEbanks($id)
    {
        $ebanks=DB::table('ebanks')->select('*')->where('section_id',$id)->orderBy('id', 'desc')->paginate(500);
   
        $ebankSections=DB::table('ebank_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.ebank.ebanks.index',compact('ebanks','ebankSections'));
    }
    public function changeStatus(string $id)
    {

        $myservice= Ebank::findOrFail($id);

        if($myservice->status)
         { $myservice->status=0;
           $myservice->save();
            return back()->with('message', 'تم الغاء تفعيل الخدمة  بنجاح');
         }
        else
         { $myservice->status=1;
            $myservice->save();
         // dd($myservice->status);
          return back()->with('message', 'تم تفعيل الخدمة  بنجاح');
         }
       
    }
    public function destroy(string $id)
    {
        $ebank= Ebank::findOrFail($id);
        $ebank->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }

}
