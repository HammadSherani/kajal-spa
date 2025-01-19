<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        
        return view('website.index');
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('website.blog.index', compact('blogs'));
    }


    public function blogDetail()
    {
        // $blogs = Blog::all();
        return view('website.blog.detail');
    }
    public function service()
    {
        // $blogs = Blog::all();
        return view('website.services.index');
    }
    public function contact()
    {
        // $blogs = Blog::all();
        return view('website.contact.index');
    }

    public function about()
    {
        // $blogs = Blog::all();
        return view('website.about.index');
    }
}
