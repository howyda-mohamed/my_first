<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        /*$data=[];
        $data['name']='howyda';
        $data['age']='20';
        return view('welcome',$data);
        //or
        //return view('welcome')->with(['string'=>'ahmed','id'=>'5']);
        $obj=new \stdClass();
        $obj->name='omar';
        $obj->age='20';
        return view('welcome',compact('obj'));*/

          return view('loading');
    }
}
