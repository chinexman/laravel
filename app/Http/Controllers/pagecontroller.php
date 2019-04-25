<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function home(){

    	$tasks=[
		"Go to the store",
	    "Go to the market",
	    "Go to the work"];
      return view('welcome', [
    	'tasks'=>$tasks,
         'boo'=>'foobar',
         'foo'=>'cool'
         
      ]);
    }


    public function login(){
    return view('login');

    }

    public function aboutus(){

    return view('aboutus');

    }
}
