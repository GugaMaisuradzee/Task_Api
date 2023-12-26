<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Blog;

class TagController extends Controller
{
    public function __invoke(TagRequest $request): JsonResponse
    {
        Tag::create($request->validated());

        return response()->json([
            'message' => 'created'
        ], 201);
    }
}
