<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.galleries.index',['galleries' => $galleries]);
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);
        Gallery::create($request->all());
        return redirect()->route('galleries.index');
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('admin.galleries.edit',['gallery'=>$gallery]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);
        $gallery = Gallery::find($id);

        $gallery->update($request->all());

        return redirect()->route('galleries.index');
    }

    public function destroy($id)
    {
        Gallery::find($id)->delete();
        return redirect()->route('galleries.index');
    }
}
