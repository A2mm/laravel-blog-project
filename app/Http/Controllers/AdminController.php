<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Post;
use App\Category;
use Session; 
session_start();

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('admin_login_form', 'store_admin');
    }
    public function admin_login_form()
    {
        if (Session::get('admin_name')) 
        {
            return redirect('/admin/dashboard');
        }
        else
        {
            return view('admin.admin_login_form');
        }
    }

    public function store_admin(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  =>  'required|min:6',
        ]);

        $email     = $request->email;
        $password  = md5($request->password);

        $admin = Admin::where(['email' => $email, 'password' => $password])->first();
        if (!empty($admin)) 
        {
            Session::put('admin_name', $admin->name);
            Session::put('admin_email', $admin->email);
            Session::put('admin_phone', $admin->phone);
            return redirect('/admin/dashboard');
        }
        else
        {
            Session::put('message', 'either name or password wrong');
            return redirect()->back();
        }
    }

    public function admin_dashboard()
    {
        $posts      = Post::all();
        $categories = Category::all();
        return view('admin.admin_dashboard', compact('posts', 'categories'));
    }

    public function admin_blog()
    {
        return view('admin.admin_blog');
    }

    public function admin_profile()
    {
        return view('admin.admin_profile');
    }

    public function admin_logout()
    {
        Session::flush();
        return redirect('/');
    }
}


