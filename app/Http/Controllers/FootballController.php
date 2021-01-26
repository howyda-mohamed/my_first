<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FootballController extends Controller
{
    public function show()
    {
        return view('football');
    }
}
