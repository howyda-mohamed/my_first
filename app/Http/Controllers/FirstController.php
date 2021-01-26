<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    public function show()
    {
        /*$data=[];
        $data['name']='howyda';
        $data['age']='20';*/
        $name=['ahmed','ali','amr','mohamed'];
        return view('welcome',compact('name'));

    }
}
