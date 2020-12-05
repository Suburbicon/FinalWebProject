<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Details;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index()
    {
        $details = Details::all();
        return view('admin.details.index',['details'=>$details]);
    }

    public function create()
    {
        return view('admin.details.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);
        Details::create($request->all());
        return redirect()->route('details.index');
    }

    public function edit($id)
    {
        $detail = Details::find($id);
        return view('admin.details.edit',['detail'=>$detail]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);
        $detail = Details::find($id);

        $detail->update($request->all());

        return redirect()->route('details.index');
    }

    public function destroy($id)
    {
        Details::find($id)->delete();
        return redirect()->route('details.index');
    }
}
