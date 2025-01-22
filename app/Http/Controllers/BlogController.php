<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::paginate(10);
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:3',
            'slug' => 'required|min:3',
            'cannonical_url' => 'required|min:3',
            'meta_title' => 'required|min:3',
            'meta_description' => 'required|min:3',
            'meta_keyword' => 'required|min:3',
            'description' => 'required|min:3',
            'content' => 'required',
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $banner = $request->file('banner');
        $name_gen = hexdec(uniqid()) . '.' . $banner->getClientOriginalExtension();
        $banner->move('uploads/banners', $name_gen);


        // $validatedData['slug'] = str_replace(' ', '-', strtolower($request->title));
        $validatedData['banner'] = "uploads/banners/$name_gen";

        Blog::create($validatedData);

        return redirect()->back()->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:3',
            'slug' => 'required|min:3',
            'cannonical_url' => 'required|min:3',
            'meta_title' => 'required|min:3',
            'meta_description' => 'required|min:3',
            'meta_keyword' => 'required|min:3',
            'description' => 'required|min:3',
            'content' => 'required'
        ]);
        if ($request->banner) {
            $request->validate([
                'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $banner = $request->file('banner');
            $name_gen = hexdec(uniqid()) . '.' . $banner->getClientOriginalExtension();
            $banner->move('uploads/banners', $name_gen);
            $validatedData['banner'] = 'uploads/banners/' . $name_gen;
        }

        $blog->update($validatedData);

        return redirect()->back()->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        unlink($blog->banner);
        $blog->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully.');
    }
}
