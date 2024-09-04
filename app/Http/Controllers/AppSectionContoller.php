<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\AppSection;
use Illuminate\Support\Facades\DB;

class AppSectionContoller extends Controller
{
    public function index()
    {
       $apps=DB::table('app_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
       return view('backend.app.appSections.index', compact('apps'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        $input = $request->all();
        if($request->file('image')!="")
        {
        if ($file = $request->file('image')) {
            $name = 'app'.time().$file->getClientOriginalName();
            $file->move('assets/images/appSections/', $name);
            $input['image'] = $name;
            }
        }
        else
        {
            $input['image'] ="";
        }
        AppSection::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
 
    }

    public function update(Request $request, string $id)
    {
        $app = AppSection::findOrFail($id);
        $input = $request->all();
        
        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
                $name = 'app_'.time().$file->getClientOriginalName();
                $file->move('images/appSection/', $name);
                $input['image'] = $name;
            }
       }
       else
       {
            $input['image'] =$app['image'];
       }
        $app->update($input);
       
        return back()->with('message', 'تم التعديل بنجاح');

    }

    public function destroy(string $id)
    {
        $app = AppSection::findOrFail($id);
        $app->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
