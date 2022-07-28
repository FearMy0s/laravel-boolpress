<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::where('is_published', true)->with(['category', 'tags', 'user'])->get();
        return response()->Json($posts);
    }

    public function show($slug) {
        $post = Post::where('slug', $slug)->with(['category', 'tags', 'user'])->first();
        return $post;
    }
}
