<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\EcardSection;
use Illuminate\Support\Facades\DB;
class EcardSectionController extends Controller
{
    public function index()
    { 
        $ecards=DB::table('ecard_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.ecard.ecardSections.index', compact('ecards'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
      
        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
                $name = 'ecard'.time().$file->getClientOriginalName();
                $file->move('assets/images/ecardSection/', $name);
                $input['image'] = $name;
            }
        }
        else
        {
            $input['image']= "";
        }
        EcardSection::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request, string $id)
    {
        $ecard = EcardSection::findOrFail($id);
        $input = $request->all();
        if($request->file('image')!="")
        {
           if ($file = $request->file('image')) {
               $name = 'ecard'.time().$file->getClientOriginalName();
               $file->move('assets/images/ecardSection/', $name);
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
    public function changeStatus(string $id)
    {

        $myservice= EcardSection::findOrFail($id);
       
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
        $ecard= EcardSection::findOrFail($id);
        $ecard->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
