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
       return view('backend.app.apps.index', compact('apps'));
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

    public function destroy(string $id)
    {
        $app= App::findOrFail($id);
        $app->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
