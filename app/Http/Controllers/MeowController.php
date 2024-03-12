<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeowController extends Controller
{
    public function index()
    {
        $meows = Meow::all();
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
        $meow = new Meow();
        $meow->content = $request->input('content');
        $meow->user_id = $request->input('user_id');
        $meow->save();
        return redirect()->route('meows.index');
    }
    public function show($id)
    {
        $meow = Meow::find($id);
        return view('meows.show', [
            'meow' => $meow
        ]);
    }
    public function edit($id)
    {
        $meow = Meow::find($id);
        return view('meows.edit', [
            'meow' => $meow
        ]);
    }
    public function update(Request $request, $id)
    {
        $meow = Meow::find($id);
        $meow->content = $request->input('content');
        $meow->user_id = $request->input('user_id');
        $meow->save();
        return redirect()->route('meows.show', $meow->id);
    }
    public function destroy($id)
    {
        $meow = Meow::find($id);
        $meow->delete();
        return redirect()->route('meows.index');
    }


//    public function show($id)
//    {
//        $user = $id.'yes';
//
//        return view('layout', [
//            'slot' => $user,
//            'paragraph' => 'pragraphe',
//            'title' => 'title'
//        ]);
//    }
}
