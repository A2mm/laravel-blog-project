<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use DB;
use SoftDeletes;

class PostController extends Controller
{
    public function __construct()
    {
         $this->middleware('admin');
    }

    public function index()
    {
        $posts= Post::orderBy('created_at', 'DESC')->paginate(30);
        return view('posts.index', compact('posts'));
    }

    public function posts_actions()
    {
        $posts= Post::orderBy('created_at', 'DESC')->paginate(40);
        return view('posts.posts_actions', compact('posts'));
    }

    public function add_new_post()
    {
        return view('posts.create');
    }

    public function storing_post(Request $request)
    {
        $this->validate($request, [
            'author'          => 'required',
            'title'           => 'required|min:10|max:25|unique:posts',
            'description'     => 'required|min:10|max:40|unique:posts',
            'content'         => 'required|min:50|max:5000',
            'category_id'     => 'required'
        ]);

        $result= Post::create($request->all());
        
        if ($result) 
        {
            return redirect('/posts')->with('create', 'post added successfully');
        }
    }

    public function view_post_details($id)
    {
        $post= Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function editing_post($id)
    {
            $post= Post::findOrFail($id);
            if ($post) 
            {
                 return view('posts.post_editing', compact('post'));
            }
    }

    public function updating_post(Request $request)
    {
        $this->validate($request, [
            'author'          => 'required',
            'title'           => 'required|min:10|max:25',
            'description'     => 'required|min:10|max:40',
            'content'         => 'required|min:50|max:5000',
            'category_id'     => 'required'
        ]);

        $post_id = $request->id;
        $post    = Post::findOrFail($post_id);
            if ($post) 
            {
                 $result= $post->update($request->all());
                 if ($result) 
                 {
                     return redirect('/post/actions')->with('update', 'post updated successfully');
                 }
            } 
    }

    public function temp_deleting(Request $request)
    {
        if ($request->ajax()) 
        {
            $id= $request->get('id');
            $post= Post::findOrFail($id);
            if ($post) 
            {
                 return view('posts.temp_deleting', compact('post'));
            }
        }
    }

    public function post_temp_deleting(Request $request)
    {
        $post_id = $request->post_id;
        $post= Post::findOrFail($post_id);
            if ($post) 
            {
                 $result= $post->delete();
                 if ($result) 
                 {
                     return redirect('/post/actions')->with('tempdelete', 'post deleted temporarily');
                 }
            } 
    }

    public function perm_deleting(Request $request)
    {
        if ($request->ajax()) 
        {
            $id= $request->get('id');
            $post= Post::findOrFail($id);
            if ($post) 
            {
                 return view('posts.perm_deleting', compact('post'));
            }
        }
    }

    public function post_perm_deleting(Request $request)
    {
        $post_id = $request->post_id;
        $post    = Post::findOrFail($post_id);
            if ($post) 
            {
                 $result= $post->forceDelete();
                 if ($result) 
                 {
                     return redirect('/post/actions')->with('permdelete', 'post deleted permanently');
                 }
            } 
    }

    public function posts_by_category($id)
    {
        $category= Category::findOrFail($id);
        $posts= Post::where('category_id', $id)->get();
            if ($posts) 
            {
                     return view('posts.posts_by_category', compact('posts', 'category'));
            } 
    }

    public function trashed_posts()
    {
        $posts= Post::onlyTrashed()->get();
        return view('posts.trashed_posts', compact('posts'));   
    }

    public function restore_post($id)
    {
         $post= Post::where('id', $id);
       
         $result=  $post->restore();
         if ($result) 
         {
           return redirect('/posts')->with('restored', 'post restored successfully');
         } 
    }
}
