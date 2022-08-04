<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;

class PostSingleController extends Controller
{
    public function index($post_id) 
    {
       
        $category = Category::all();
        $post = Post::find($post_id);
        $comment = Comment::where('post_id',  '=', $post_id)->orderBy('created_at', 'asc')->get();
        
        return view('post-single', compact('post', 'category', 'comment'));
    }
}
