<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index',['news'=>$news]);
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]);
        News::create($request->all());
        return redirect()->route('news.index');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit',['post'=>$news]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]);
        $news = News::find($id);

        $news->update($request->all());

        return redirect()->route('news.index');
    }

    public function destroy($id)
    {
        News::find($id)->delete();
        return redirect()->route('news.index');
    }

}
