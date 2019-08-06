<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use SoftDeletes;

class CategoryController extends Controller
{
    public function __construct()
    {
         $this->middleware('admin');
    }

    public function index()
    {
        $categories= Category::orderBy('created_at', 'DESC')->get();
        return view('categories.index', compact('categories'));
    }

    public function categories_actions()
    {
        $categories= Category::orderBy('created_at', 'DESC')->get();
        return view('categories.categories_actions', compact('categories'));
    }

    public function add_new_category()
    {
        return view('categories.create');
    }
    
    public function storing_category(Request $request)
    {
        $this->validate($request, [
            'name'                => 'required|min:3|max:10|unique:categories',
            'slug'                => 'required|min:5|max:25|unique:categories',
            'description'         => 'required|min:30|max:1000',
        ]);

        $result= Category::create($request->all());
        if ($result) 
        {
            return redirect('/categories')->with('create', 'category added successfully');
        }
    }

    public function view_category($id)
    {
       $category= Category::findOrFail($id);
       return view('categories.show', compact('category'));
    }

    public function editing_category($id)
    {
            $category= Category::findOrFail($id);
            if ($category) 
            {
                 return view('categories.editing_category', compact('category'));
            }
    }

    public function updating_category(Request $request)
    {
        $this->validate($request, [
            'name'                => 'required|min:3|max:10',
            'slug'                => 'required|min:5|max:25',
            'description'         => 'required|min:30|max:1000',
        ]);
        
        $category_id = $request->id;
        $category    = Category::findOrFail($category_id);
        if ($category) 
            {
                 $result= $category->update($request->all());
                 if ($result) 
                 {
                     return redirect('/categories')->with('update', 'category updated successfully');
                 }
            } 
    }

    public function temp_deleting(Request $request)
    {
        if ($request->ajax()) 
        {
            $id= $request->get('id');
            $category= Category::findOrFail($id);
            if ($category) 
            {
                 return view('categories.temp_deleting', compact('category'));
            }
        }
    }

    public function temp_deleting_category(Request $request)
    {
        $category_id = $request->category_id;
        $category    = Category::findOrFail($category_id);
            if ($category) 
            {
                 $result= $category->delete();
                 if ($result) 
                 {
                     return redirect('/categories')->with('tempdelete', 'category deleted temporarily');
                 }
            } 
    }

    public function perm_deleting(Request $request)
    {
        if ($request->ajax()) 
        {
            $id= $request->get('id');
            $category= Category::findOrFail($id);
            if ($category) 
            {
                 return view('categories.perm_deleting', compact('category'));
            }
        }
    }

    public function perm_deleting_category(Request $request)
    {
        $category_id = $request->category_id;
        $category= Category::findOrFail($category_id);
            if ($category) 
            {
                 $result= $category->forceDelete();
                 if ($result) 
                 {
                     return redirect('/categories')->with('permdelete', 'category deleted permanently');
                 }
            } 
    }

    public function trashed_categories()
    {
        $categories= Category::onlyTrashed()->get();
        return view('categories.trashed_categories', compact('categories'));   
    }

    public function restore_category($id)
    {
        $category= Category::where('id', $id);
        $result=  $category->restore();
        if ($result) 
        {
            return redirect('/categories')->with('restored', 'category restored successfully');
        }
           
    }
}
