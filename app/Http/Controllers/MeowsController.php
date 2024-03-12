<?php

namespace App\Http\Controllers;

use App\Models\Meows;
use Illuminate\Http\Request;

class MeowsController extends Controller
{
    public function index()
    {
        $meows = Meows::all();
        return view(
            'meows.index',
        [
            'meows' => $meows
        ]);
    }
    public function create()
    {
        return view('meows.create');
    }
    public function store(Request $request)
    {
        $meows = new Meows();
        $meows->content = $request->input('content');
        $meows->user_id = $request->input('user_id');
        $meows->save();
        return redirect()->route('meows.index');
    }
//    public function show($id)
//    {
//        $meows = Meows::find($id);
//        return view('meows.show', [
//            'meows' => $meows
//        ]);
//    }
    public function edit($id)
    {
        $meows = Meows::find($id);
        return view('meows.edit', [
            'meows' => $meows
        ]);
    }
    public function update(Request $request, $id)
    {
        $meows = Meows::find($id);
        $meows->content = $request->input('content');
        $meows->user_id = $request->input('user_id');
        $meows->save();
        return redirect()->route('meows.show', $meows->id);
    }
    public function destroy($id)
    {
        $meows = Meows::find($id);
        $meows->delete();
        return redirect()->route('meows.index');
    }


    public function show($id)
    {
        $user = $id;

        return view('layout', [
            'slot' => $user,
            'paragraph' => 'pragraphe',
            'title' => 'title'
        ]);
   }
}
