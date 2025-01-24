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
        $blogs = Blog::paginate(1);
        return view('website.blog.index', compact('blogs'));
    }


    public function show($slug)
    {
        // Database se blog find karein slug ke through
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $relatedBlog = Blog::latest()->take(2)->get();
        $popularBlog = Blog::latest()->take(3)->get();


        // View return karein
        return view('website.blog.detail', compact('blog', 'relatedBlog', 'popularBlog'));
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
