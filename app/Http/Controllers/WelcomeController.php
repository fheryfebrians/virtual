<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sewavirtual;

class WelcomeController extends Controller
{
    public function index()
    {
    	$sewavirtual = sewavirtual::all();
    	return view('welcome', compact('sewavirtual'));
    }


}
