<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\{Blog, Tag};
use Illuminate\Http\JsonResponse;

class BlogController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'data' =>  Blog::all(),
        ]);
    }

    public function store(BlogRequest $request, Tag $tag): JsonResponse
    {
        $blog = Blog::query()
            ->create($request->validated());

        $blog->tags()->attach($tag->id);

        return response()->json([
            'message' => 'created',
        ], 201);

    }

    public function show(string $id): JsonResponse
    {
        return response()->json([
            'data' =>  Blog::with('tags')->findOrFail($id)
        ]);
    }
}
