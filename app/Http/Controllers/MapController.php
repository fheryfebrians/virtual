<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sewavirtual;

class MapController extends Controller
{
    public function showMap()
    {
    	$sewavirtual = sewavirtual::all();
    	return view('page.peta', compact('sewavirtual'));
    }
}
