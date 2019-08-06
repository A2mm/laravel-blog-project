<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class FrontController extends Controller
{
    public function index()
    {
        $posts= Post::orderBy('created_at', 'DESC')->paginate(30);
        return view('front.index', compact('posts'));
    }

    public function view_post($id)
    {
        $post= Post::findOrFail($id);
        return view('front.view', compact('post'));
    }

    public function view_post_by_category($id)
    {
        $category= Category::findOrFail($id);
        $posts= Post::where('category_id', $id)->get();
        return view('front.view-post-by-cat', compact('posts', 'category')); 
    }
}
