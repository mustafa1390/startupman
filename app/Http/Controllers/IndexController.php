<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index( $any=null)
    {


        if($any=='admin/*'){
dd('hi');
        }
        if($any=='demo'){

    return view('index.demo_1');
        }else{

        }    return view('index.index_js');
    }
    public function demo()
    {
    return view('index.demo_1');
    }

}
