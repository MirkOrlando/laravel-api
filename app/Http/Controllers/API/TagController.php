<?php

namespace App\Http\Controllers\API;

use App\Tag;
use App\Http\Controllers\Controller;


class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return $tags;
    }
}