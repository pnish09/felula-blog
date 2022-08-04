<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostCategoryController extends Controller
{
    public function index($cat_id) 
    {
        $category = Category::all();
        $post = Post::where('category_id', $cat_id)->where('status', 0)->get();
        return view('post-category', compact('post', 'category'));
    }
}
