<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Auth;
class ApiUserController extends Controller
{
    public function getAgents($id)
    { 
        $agents=DB::table('users')->select('*')->where('agent_id', $id)->get();
        return response()->json(['agents'=>$agents]);  
    }

    public function store(Request $request)
    {   
       $input = $request->all();
       $input['mobile'] = $input['code'] . $input['mobile'];
       $input['password'] = bcrypt($input['password']);
       User::create($input);
       return response()->json(['message'=>'تمت إضافة المستخدم بنجاح ']);
    }

    public function login(Request $request)
    {   
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->accessToken;

            // $token = $user->createToken('auth_token')->token;
            return response()->json(['token' => $token,'user'=>$user], 200);
        }
        else
        {
            return response()->json(['message'=>'المستخدم غير موجود'], 401);
        }
    }

    public function getUser()
    {
        return response()->json(Auth::user());
    }

    public function update(Request $request,  $id)
    { 
        try {
            $user = User::findOrFail($id);
            $input = $request->all();
        if($request->file('image')!="")
        {
      
            if ($file = $request->file('image')) {
                $name = 'user_'.time().$file->getClientOriginalName();
                $file->move('images/users/', $name);
                $input['image'] = $name;
            }
        }
        else
        {
            $input['image'] =$user['image'];
        }
        $input['password'] = bcrypt($input['password']);
        $user->update($input);
        
        return back()->with('message', 'تم التعديل بنجاح');
        }
        catch(\Exception $e ) 
        {
            return response()->json(['message'=>'حدث خطا أثناء محاولة تعديل المعلومات']);
        }
    }
}