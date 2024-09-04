<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EbankSection;
use Illuminate\Support\Facades\DB;
class EbankSectionController extends Controller
{
    
    public function index()
    { 
        $ebanks=DB::table('ebank_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.ebank.ebankSections.index', compact('ebanks'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
                $name = 'ebank'.time().$file->getClientOriginalName();
                $file->move('assets/images/ebankSection/', $name);
                $input['image'] = $name;
            }
        }
        else
        {
            $input['image']= "";
        }
        EbankSection::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request, string $id)
    {
        $ebank = EbankSection::findOrFail($id);
        $input = $request->all();
        if($request->file('image')!="")
        {
           if ($file = $request->file('image')) {
               $name = 'ebank'.time().$file->getClientOriginalName();
               $file->move('assets/images/ebankSection/', $name);
               $input['image'] = $name;
            }
        }
        else
        {
            $input['image']=$ebank['image'];
        }
        $ebank->update( $input);
       
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy(string $id)
    {
        $ebank= EbankSection::findOrFail($id);
        $ebank->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
