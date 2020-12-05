<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $details = Details::all();
        return view('pages.about',compact('details'));
    }
}
