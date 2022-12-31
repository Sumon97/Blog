<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {   
        $categories = Category::all();
        return view('Category.index')->withCategories($categories);
    }



    public function store(Request $request)
    {
       $this->validate($request,[
       
         'name'  => 'required',
         'slug'  => 'required',
       ]);

       $category = New Category;
       $category->name = $request->input('name');
       $category->slug = Str::slug($request->slug);
       $category->save();

       return redirect()->back()->with('success', 'You have added new Category name successfully');
    }


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



    public function destroy($id)
    {
     
    }
}
