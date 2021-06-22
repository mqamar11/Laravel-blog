<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Illuminate\Support\Facades\Session;

class TagController extends Controller
{
    public function index()
    {
        return view('admin.tag.index')->with('tags', Tag::all());
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'tag' => 'required'
        ]);

        Tag::create([

            'tag' => $request->tag
        ]);

        Session::flash('success', 'Tag created successfully.');

        return redirect(route('tag.list'));
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.edit')->with('tag', $tag);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tag' => 'required'
        ]);

        $tag = Tag::find($id);

        $tag->tag = $request->tag;

        $tag->save();

        Session::flash('success', 'Tag udated successfully');

        return redirect()->route('tag.list');
    }

    public function destroy($id)
    {
        Tag::destroy($id);

        Session::flash('success', 'Tag deleted successfully');

        return redirect()->back();
    }

}
