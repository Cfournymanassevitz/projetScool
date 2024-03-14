<?php

namespace App\Http\Controllers;

use App\Models\Meows;
use App\Models\User;
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
        return view('meows.show', [
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
        $meow = Meows::with('user')->find($id);

        if ($meow === null) {
            // Handle the situation when no Meow with the specified ID exists.
            // For example, you can return a 404 error response:
            abort(404, 'Meow not found');
        }

        $user = $meow->user;

        return view('meows.show', [
            'meow' => $meow,
            'user' => $user
        ]);
   }
}
