<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function update(Request $request): RedirectResponse
    {
        $user = $request->user();

        // ...

        return redirect('/login');
    }
}
