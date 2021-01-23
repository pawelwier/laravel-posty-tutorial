<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostLikeController extends Controller
{
    function store(Post $post, Request $request) {
        $post->likes()->create([
            'user_id' => $request->user()->id,
            ]);

        return back();
    }

}
