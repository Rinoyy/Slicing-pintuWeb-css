<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataController extends Controller
{
    public function index(){
        return view('/index');
    }
    public function test(){
        return view('/test');
    }
}
