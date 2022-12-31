<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use Auth;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderby('created_at', 'desc')->where('pubstatus', 1)->get();
        return view('Post.index')->withPosts($posts);
    }


    public function create()
    {   
        $categories = Category::all();
        $tags = Tag::all();
        return view('Post.create')->withCategories($categories)->withTags($tags);
    }


    public function store(Request $request)
    {
        $this->validate($request,[
       
         'title'  => 'required',
         'detail' => 'required', 
        
     

       ]);

           //handle file upolad
            if($request->hasFile('feature')){
                //get filename with the extension
                $filenameWithExt = $request->file('feature')->getClientOriginalName();
                // GET just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //get just ext
                $extension = $request->file('feature')->getClientOriginalExtension();
                //filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                //upload image
                $path = $request->file('feature')->storeAs('public/feature', $fileNameToStore);

            } else {
                $fileNameToStore = 'feature.jpg';
            }


       $post = New post;
       $post->title = $request->input('title');
       $post->detail = $request->input('detail');
       $post->feature = $fileNameToStore;
       $post->category_id = $request->input('category_id');

       $post->admin_id = Auth::guard('admin')->user()->id?? null;
       $post->editor_id = Auth::guard('editor')->user()->id?? null;
       $post->publisher_id = Auth::guard('publisher')->user()->id?? null;
       $post->journalist_id = Auth::guard('journalist')->user()->id ?? null;
        
       $post->save();
        
       //Attach Tag
       $post->tags()->sync($request->tags);

       return redirect()->back()->with('success', 'You have added new post name successfully');

           
    }


    public function show($id)
    {
        $post = post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        $posts = Post::where('pubstatus', '1')->orderby('created_at','desc')->take(2)->get();
        $counts = Post::selectRaw('category_id, count(category_id) as id')
          ->groupBy('category_id')
          ->get();

        $news = Post::where('pubstatus', 1)->orderby('created_at','desc')->take(3)->get();

        $relates = Post::where('category_id', $post->Category->id)->orderby('created_at','desc')->take(2)->get();
        $comments = Comment::where('post_id', $id)->get();
        return view('Post.show')->withPost($post)->withCategories($categories)->withTags($tags)->withPosts($posts)->withCounts($counts)->withNews($news)->withRelates($relates)->withComments($comments);
    }


    public function edit($id)
    {
        
        $post = Post::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('Post.edit')->withPost($post)->withCategories($categories)->withTags($tags);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
       
         'title'  => 'required',
         'detail' => 'required', 
         
     

       ]);

           //handle file upolad
            if($request->hasFile('feature')){
                //get filename with the extension
                $filenameWithExt = $request->file('feature')->getClientOriginalName();
                // GET just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //get just ext
                $extension = $request->file('feature')->getClientOriginalExtension();
                //filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                //upload image
                $path = $request->file('feature')->storeAs('public/feature', $fileNameToStore);

            } else {
                $fileNameToStore = 'feature.jpg';
            }


       $post = Post::find($id);
       $post->title = $request->input('title');
       $post->detail = $request->input('detail');
       if($request->hasFile('feature')){
        $post->feature    = $fileNameToStore;
            } 
       $post->category_id = $request->input('category_id');
       $post->tag_id = $request->input('tag_id');
       $post->editstatus = $request->input('editstatus');
       $post->pubstatus = $request->input('pubstatus');
       $post->save();

          if (isset($request->tags)) {
            $post->tags()->sync($request->tags);
        } else {
            $post->tags()->sync(array());
        }

       return redirect()->back()->with('success', 'You have added new post name successfully');
    }


    public function destroy($id)
    {
       
    }
}
