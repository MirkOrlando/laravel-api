<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['tags', 'category', 'user'])->paginate(9);

        return $posts;
    }
}