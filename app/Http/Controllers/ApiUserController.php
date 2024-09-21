<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\DB;
class ApiUserController extends Controller
{
   
    public function store(Request $request)
    {   
        $input = $request->all();
        $input['mobile']= $input['code']. $input['mobile'];
        $input['password']=bcrypt($input['password']);
        User::create($input);
        return response()->json(['message'=>'تمت إضافة المستخدم بنجاح ']);
    }
    public function login(Request $request)
    {   
        $val=$request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $user=User::where('email',$val['email'])->First();
        if(!$user|| !\Hash::check($val['password'],$user->password))
        {
            return response()->json(['message'=>'المستخدم غير موجود']);
        }
        $token=$user->creatToken('auth_token')->accessToken;
        return response()->json(['access_token'=>$token,'user'=>$user]);
    }
}