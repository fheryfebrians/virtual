<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sewavirtual;
use RealRashid\SweetAlert\Facades\Alert;

class WelcomeController extends Controller
{
    public function index()
    {
        $sewavirtual = sewavirtual::all();
        Alert::toast('Hallo Selamat Datang');
    	return view('welcome', compact('sewavirtual'));
    }


}
