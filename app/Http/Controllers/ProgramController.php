<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Program;
use Illuminate\Support\Facades\DB;
class ProgramController extends Controller
{
    public function index()
    { 
        $programs=DB::table('programs')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.program.programs.index', compact('programs'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if($request->file('image')!="")
        {
            if ($file = $request->file('image')) {
                $name = 'program'.time().$file->getClientOriginalName();
                $file->move('assets/images/program/', $name);
                $input['image'] = $name;
            }
        }
        else
        {
            $input['image']= "";
        }
        Program::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request, string $id)
    {
        $program = Program::findOrFail($id);
        $input = $request->all();
        if($request->file('image')!="")
         {
            if ($file = $request->file('image')) {
                $name = 'program'.time().$file->getClientOriginalName();
                $file->move('assets/images/program/', $name);
                $input['image'] = $name;
            }
        }
        else
        {
            $input['image']= $program['image'];
        }
        $program->update($input);
       
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy(string $id)
    {
        $program= Program::findOrFail($id);
        $program->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
