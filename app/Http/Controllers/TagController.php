<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag; 
use Illuminate\Support\Str;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();
        return view('Tag.index')->withTags($tags);
    }


    public function create()
    {
       
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',

        ]);

        $tag = new Tag;
        $tag->name = $request->input('name');
        $tag->slug = $request->input('slug');
        $tag->save();

        return redirect()->back()->with('success', 'You have successfully added a new Tag');
    }


    public function destroy($id)
    {
       
    }
}
