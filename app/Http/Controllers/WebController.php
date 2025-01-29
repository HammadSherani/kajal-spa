<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        
        return view('website.pages.index');
    }

    public function blog()
    {
        $blogs = Blog::paginate(12);
        return view('website.pages.blog', compact('blogs'));
    }


    public function show($slug)
    {
        // Database se blog find karein slug ke through
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $relatedBlog = Blog::latest()->take(2)->get();
        $popularBlog = Blog::latest()->take(3)->get();

        return view('website.pages.blogDetail', compact('blog', 'relatedBlog', 'popularBlog'));
    }
    public function service()
    {
        // $blogs = Blog::all();
        return view('website.pages.service');
    }
    public function contact()
    {
        // $blogs = Blog::all();
        return view('website.pages.contact');
    }

    public function about()
    {
        // $blogs = Blog::all();
        return view('website.pages.about');
    }
}
