<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return $categories;
    }
}