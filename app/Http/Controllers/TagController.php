<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(TagRequest $request): JsonResponse
    {
        Tag::create($request->validated());

        return response()->json([
            'data' => 'created'
        ]);
    }
}
