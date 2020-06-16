<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\sewavirtual;

class HomeController extends Controller
{
    public function showHome()
    {
        $user = User::all();
        return view('admin.home', compact('user'));
    }
    public function showUser()
    {
        $user = User::all();
        return view('admin.user', compact('user'));
    }
    public function showVirtual()
    {
        $sewavirtual = sewavirtual::all();
        return view('admin.virtual', compact('sewavirtual'));
    }
}
