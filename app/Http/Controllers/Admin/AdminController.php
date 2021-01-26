<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    /*public function __construct()
    {
        $this -> middleware('auth');
    }*/
    public function show()
    {
        return'hallo howyda you are admin';
    }
    public function show2()
    {
        return'hallo howyda you arenot admin';
    }
}
