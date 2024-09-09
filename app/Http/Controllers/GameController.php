<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GameSection;
use App\Models\Game;
use Illuminate\Support\Facades\DB;
class GameController extends Controller
{
    public function index()
    { 
        $games=DB::table('games')->select('*')->orderBy('id', 'desc')->paginate(500);
        
        $gameSections=DB::table('game_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.game.games.index', compact('games','gameSections'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
       
         if($request->file('image')!="")
         {
            if ($file = $request->file('image')) {
                $name = 'game'.time().$file->getClientOriginalName();
                $file->move('assets/images/game/', $name);
                $input['image'] = $name;
            }
        }
        else
        {
            $input['image']= "";
        }
        Game::create($input);
        return back()->with('message', 'تمت الاضافة بنجاح');
    }

    public function update(Request $request, string $id)
    {
        $game = Game::findOrFail($id);
        $input = $request->all();
        if($request->file('image')!="")
        {
           if ($file = $request->file('image')) {
               $name = 'game'.time().$file->getClientOriginalName();
               $file->move('assets/images/game/', $name);
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

    public function showGames($id)
    {
        $games=DB::table('games')->select('*')->where('section_id',$id)->orderBy('id', 'desc')->paginate(500);
   
        $gameSections=DB::table('game_sections')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.game.games.index',compact('games','gameSections'));
    }
    public function changeStatus(string $id)
    {

        $myservice= Game::findOrFail($id);
       
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
        $game= Game::findOrFail($id);
        $game->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
