<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameSection;
use Illuminate\Support\Facades\DB;
class GameSectionController extends Controller
{
    public function index()
    { 
        $games=DB::table('game_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.game.gameSections.index', compact('games'));
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
                $name = 'game'.time().$file->getClientOriginalName();
                $file->move('assets/images/gameSection/', $name);
                $input['image'] = $name;
            }
        }
        else
        {
            $input['image']= "";
        }
        GameSection::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
        $game = GameSection::findOrFail($id);
        $input = $request->all();
      
        if($request->file('image')!="")
        {
           if ($file = $request->file('image')) {
               $name = 'game'.time().$file->getClientOriginalName();
               $file->move('assets/images/gameSection/', $name);
               $input['image'] = $name;
            }
        }
        else
        {
            $input['image']= $game['image'];
        }
        $game->update( $input);
   
        return back()->with('message', 'تم التعديل بنجاح');
    }

    public function destroy(string $id)
    {
        $game= GameSection::findOrFail($id);
        $game->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
