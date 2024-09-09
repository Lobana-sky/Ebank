<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\DB;
class SettingController extends Controller
{
    public function index()
    { 
        $setting=DB::table('settings')->select('*')->orderBy('id', 'desc')->first();
        if(!$setting)
        $setting= Setting::create([
            'app_name'=>"our beauty app",
            'logo'=>"loo",
            'about_text'=>"about_text",
            'mobile'=>"",
            'address'=>"mobile",
            'email'=>"email",
            'facebook'=>"facebook",
            'instagram'=>"instagram",
            'twitter'=>"twitter",
            'telegram'=>"telegram",
        ]);
        return view('backend.setting.index', compact('setting'));
    }

    public function update(Request $request, string $id)
    {
        $setting = Setting::findOrFail($id);
        $input = $request->all();
       
        if($request->file('logo')!="")
         {
            if ($file = $request->file('logo')) {
                $name = 'setting'.time().$file->getClientOriginalName();
                $file->move('assets/images/setting/', $name);
                $input['logo'] = $name;
            }
        }
        else
        {
            $input['logo']= $setting['logo'];
        }
        $setting->update($input);
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy(string $id)
    {
      /*  $setting= setting::findOrFail($id);
        $setting->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
        */
    }

}
