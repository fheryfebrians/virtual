<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class PageController extends Controller
{
    public function showSyarat()
    {
    	return view('page.syarat');
    }
    public function showPanduan()
    {
    	return view('page.panduan');
    }
    public function showPemilik()
    {
    	return view('page.pemilik');
    }
    public function showContact()
    {
        return view('page.contact');
    }
    public function uploadContact(Request $request)
    {
        $contact = new Contact();

        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->nomor = $request['nomor'];
        $contact->pesan = $request['pesan'];

        $contact->save();
        return redirect()->back();
    }   

    public function showFAQ()
    {
        return view('page.faq');
    }
    public function showAbout()
    {
        return view('page.about');
    }
    public function showInfo()
    {
        return view('page.info');
    }
    public function showKarir()
    {
        return view('page.karir');
    }
}
