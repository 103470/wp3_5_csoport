<?php

namespace App\Http\Controllers;

use App\Models\Jarmuvek;
use Illuminate\Http\Request;

class JarmuvekManager extends Controller
{
    function index()
    {
        $jarmuvek = Jarmuvek::all();
        return view('jarmuvek', compact('jarmuvek'));
    }

    function id(Request $request)
    {
        $id1 = $request->route('id');
        return view('car', compact('id1'));
    }
}
