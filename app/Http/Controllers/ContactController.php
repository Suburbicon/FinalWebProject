<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
           'name'=>'required',
           'tel'=>'required',
           'email'=>'required',
           'text'=>'required'
        ]);

        Contact::create($request->all());
        return view('pages.thankspage');
    }

    public function thanks()
    {
        return view('pages.thankspage');
    }
}
