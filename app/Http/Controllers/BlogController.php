<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use PhpParser\Node\Stmt\If_;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->get();
  
        return view('blogs.index', compact('blogs'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blogs = new Blog();

        $blogs->title = $request->input('title');
        $blogs->date = $request->input('date');
        $blogs->author = $request->input('author');
        $blogs->content = $request->input('content');
        $blogs->link = $request->input('link');

        if ($request->hasFile('blog_img')) {
            $avatarPath = $request->file('blog_img')->store('blog_images', 'public');
            $blogs->blog_img = $avatarPath;
        }

        $blogs->save();

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blogs = Blog::findOrFail($id);

        $blogs->title = $request->input('title');
        $blogs->date = $request->input('date');
        $blogs->author = $request->input('author');
        $blogs->content = $request->input('content');
        $blogs->link = $request->input('link');

        if($request->hasFile('blog_img'))
        {
            $avatarPath = $request->file('blog_img')->store('blog_image', 'public');
            $blogs->blog_img = $avatarPath;
        }

        $blogs->save();

        return redirect()->route('blogs.index')->with('success', 'Blog Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogs = Blog::findOrFail($id);
  
        $blogs->delete();
  
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }
}
