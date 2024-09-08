<?php

namespace App\Http\Controllers;
 
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\App;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    public function index()
    {
       $apps=DB::table('apps')->select('*')->orderBy('id', 'desc')->paginate(500);
       
       $appSections=DB::table('app_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
       return view('backend.app.apps.index', compact('apps','appSections'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
                $name = 'app'.time().$file->getClientOriginalName();
                $file->move('images/apps/', $name);
                $input['image'] = $name;
            }
       }
       else 
       {
            $input['image'] ="";
       }
      
        App::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request, string $id)
    {
        $app = App::findOrFail($id);
        $input = $request->all();
      
        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
                $name = 'app_'.time().$file->getClientOriginalName();
                $file->move('images/apps/', $name);
                $input['image'] = $name;
            }
       }
       else
       {
        $input['image'] =$app['image'];
       }
        $app->update( $input);
       
        return back()->with('message', 'تم التعديل بنجاح');
    }
    public function showApps($id)
    {
        $apps=DB::table('apps')->select('*')->where('section_id',$id)->orderBy('id', 'desc')->paginate(500);
   
        $appSections=DB::table('app_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.app.apps.index',compact('apps','appSections'));
    }
    public function changeStatus(string $id)
    {

        $myservice= App::findOrFail($id);
       
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
        $app= App::findOrFail($id);
        $app->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
