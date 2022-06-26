<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $categories = Category::all();
        return view('Category.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
       
         'name'  => 'required',
         'slug'  => 'required',
       ]);

       $category = New Category;
       $category->name = $request->input('name');
       $category->slug = $request->input('slug');
       $category->save();

       return redirect()->back()->with('success', 'You have added new Category name successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $category = Category::find($id);
        $posts = Post::where('pubstatus', 1)->orderby('created_at','desc')->take(3)->get();
        $counts = Post::selectRaw('category_id, count(category_id) as id')
          ->groupBy('category_id')
          ->get();
        
        $news = Post::where('category_id', $id)->where('pubstatus', 1)->orderby('created_at','desc')->orderby('created_at','desc')->get();
        return view('Category.show')->withCategory($category)->withPosts($posts)->withCounts($counts)->withnews($news);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
