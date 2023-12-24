<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Blog::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request, Blog $blog, Tag $tag)
    {
        Blog::create([
            'title' => $request->title,
            'name' => $request->name,
            'image' => $request->image
        ]);

        $blog->tags()->attach($tag->id);

        return response()->json([
            'message' => 'created'
        ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Blog::with('tags')->find($id);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
