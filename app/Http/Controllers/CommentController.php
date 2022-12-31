<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Auth;

class CommentController extends Controller
{

    public function index()
    {
      
    }


    public function create()
    {
      
    }


    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'comment' => 'required'
        ]);

        $comment = new Comment;
        $comment->user_id  = auth::user()->id;
        $comment->comment  = $request->input('comment');
        $comment->post_id  = $request->input('post_id');
        $comment->save();

        return redirect()->back()->with('success', 'This comment is posted');
    }   


    public function show($id)
    {
      
    }


    public function edit($id)
    {
        
    }


    public function update(Request $request, $id)
    {
      
    }

    public function destroy($id)
    {
       
    }
}
