<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'login'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);
        User::create($request->all());
        return redirect()->route('admin.login');
    }


}
