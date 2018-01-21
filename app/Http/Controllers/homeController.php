<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use home;

class homeController extends Controller
{
    public function index()
    {
    	//$data = home::all();
    	$sum = 5+6;
    	
    	return view('welcome', compact('sum'));	//welcome.blade.php
    }
}
