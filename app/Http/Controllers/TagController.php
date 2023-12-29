<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TagController extends Controller
{
<<<<<<< HEAD
    /**
     * Handle the incoming request.
     */
=======
>>>>>>> 076c9c2a5a42a9e6da1bab829f8bdf0deacf3208
    public function __invoke(TagRequest $request): JsonResponse
    {
        Tag::create($request->validated());

        return response()->json([
<<<<<<< HEAD
            'data' => 'created'
        ]);
=======
            'message' => 'created'
        ], 201);
>>>>>>> 076c9c2a5a42a9e6da1bab829f8bdf0deacf3208
    }
}
