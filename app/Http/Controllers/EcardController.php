<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ecard;
use Illuminate\Support\Facades\DB;

class EcardController extends Controller
{
  
    public function index()
    { 
        $ecards=DB::table('ecards')->select('*')->orderBy('id', 'desc')->paginate(500);
        $ecardsSections=DB::table('ecard_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.ecard.ecards.index', compact('ecards','ecardsSections'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
       
         if($request->file('image')!="")
         {
            if ($file = $request->file('image')) {
            $name = 'ecard'.time().$file->getClientOriginalName();
            $file->move('assets/images/ecard/', $name);
            $input['image'] = $name;
         }
        }
        else
        {
            $input['image']= "";
        }
        Ecard::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request, string $id)
    {
        $ecard = Ecard::findOrFail($id);
        $input = $request->all();
        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
           $name = 'ecard'.time().$file->getClientOriginalName();
           $file->move('assets/images/ecard/', $name);
           $input['image'] = $name;
        }
        }
        else
        {
            $input['image']= $ecard['image'];
        }
        $ecard->update( $input);
       
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function showEcards($id)
    {
        $ecards=DB::table('ecards')->select('*')->where('section_id',$id)->orderBy('id', 'desc')->paginate(500);
   
        $ecardSections=DB::table('ecard_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.ecard.ecards.index',compact('ecards','ecardSections'));
    }
    public function changeStatus(string $id)
    {

        $myservice= Ecard::findOrFail($id);
       
        if($myservice->status)
         { $myservice->status=0;
           $myservice->save();
            return back()->with('message', 'تم الغاء تفعيل الخدمة  بنجاح');
         }
        else
         { $myservice->status=1;
            $myservice->save();
          return back()->with('message', 'تم تفعيل الخدمة  بنجاح');
         }
    }
    public function destroy(string $id)
    {
        $ecard= Ecard::findOrFail($id);
        $ecard->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }

}
 