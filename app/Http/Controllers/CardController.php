<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Card;
use Illuminate\Support\Facades\DB;
class CardController extends Controller
{
    public function index()
    { 
        $cards=DB::table('cards')->select('*')->orderBy('id', 'desc')->paginate(500);
        return view('backend.card.cards.index', compact('cards'));
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
                $name = 'card'.time().$file->getClientOriginalName();
                $file->move('assets/images/card/', $name);
                $input['image'] = $name;
            }   
        }
        else
        {
            $input['image'] ="";
        }
        Card::create($input);
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
        $card = Card::findOrFail($id);
      
        $input = $request->all();

        if($request->file('image')!="")
        {
        if ($file = $request->file('image')) {
            $name = 'card'.time().$file->getClientOriginalName();
            $file->move('assets/images/card/', $name);
            $input['image'] = $name;
        }   
            
        }
        else
        {
            $input['image'] =$card['image'];
        }
        $card->update( $input );
        return back()->with('message', 'تم التعديل بنجاح');
    }
    public function changeStatus(string $id)
    {

        $myservice= Card::findOrFail($id);
       
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
        $card= Card::findOrFail($id);
        $card->delete();
        return back()->with('message', 'تم الحذف  بنجاح');
    }
}
