<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;


class PageController extends Controller
{
   
    public function front()
 {
  
    $sposts = Post::where('pubstatus', '1')->orderby('created_at','desc')->take(2)->get();
    $posts = Post::where('pubstatus', '1')->orderby('created_at','desc')->take(2)->get();
    $categories = Category::all();
    $counts = Post::selectRaw('category_id, count(category_id) as id')
          ->groupBy('category_id')
          ->get();
    return view('Page.front')->withSposts($sposts)->withCategories($categories)->withCounts($counts)->withPosts($posts);

    }
}
