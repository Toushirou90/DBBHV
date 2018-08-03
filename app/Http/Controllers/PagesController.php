<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /*
    public function index(){
        $title = 'Welcome To Laravel!';
        return view('pages.index')->with($title);
    }

*/


    public function index(){
        $title = 'Frontend für Database BHV';
        return view('db_bhv.index')->with('title', $title);
    }





}
