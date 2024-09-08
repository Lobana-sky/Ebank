<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    { 
        $users=DB::table('users')->select('*')->orderBy('id', 'desc')->paginate(500);
        $vips=DB::table('vips')->select('*')->orderBy('id', 'desc')->get();
        return view('backend.users.index', compact('users','vips'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    
        $input = $request->all();
        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
               $name = 'user'.time().$file->getClientOriginalName();
               $file->move('images/users/', $name);
               $input['image'] = $name;
            }
        }
        else
        {
            $input['image']="";
        }
        $input['mobile']= $input['code']. $input['mobile'];
        User::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');        
    }

    public function show( int $id)
    {
    }

    public function showCategory($id)
    {
        $users=DB::table('users')->select('*')->where('role',$id)->orderBy('id', 'desc')->paginate(500);
   
        return view('backend.users.index',compact('users'));
    }

    public function edit( $id)
    {
    }

    public function update(Request $request,  $id)
    {
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

    public function destroy( $id)
    {
        $user= User::findOrFail($id);
        $user->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
