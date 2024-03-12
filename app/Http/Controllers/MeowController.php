<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeowController extends Controller
{
    public function index()
    {
        return "Liste des messages";
    }

    public function show($id)
    {
        return "Un message $id";
    }
}
