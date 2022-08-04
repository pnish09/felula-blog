<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidatePost;

class MyPostsController extends Controller
{
    public function index() 
    {
        $category = Category::all();
        $post = Post::where('created_by', auth()->id())->where('status', 0)->get();
        return view('my-posts', compact('post', 'category'));
    }

    public function create() 
    {
        $category = Category::all();
        return view('create-post', compact('category'));
    }

    public function store(ValidatePost $request) 
    {
       
        $data = $request->validated();

        $post = new post;
        $post->name         = $data['name'];
        $post->description  = $data['description'];
        $post->category_id  = $data['category_id'];
        $post->slug         = $data['slug'];
        $post->created_by   = Auth::user()->id;
        if(request()->hasfile('image')) {
            $img       = request()->file('image');
            $img_name  = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME) .'-'.date('YmdHi').'.'.$img->getClientOriginalExtension();
            $img->move(public_path('uploads/post'), $img_name);
            $post->image = $img_name;
        }
        $post->save();

        return redirect('add-post')->with('status', 'Post has been saved successfully');
    }

    public function edit($post_id) 
    {
        $category = Category::all();
        
        $post = Post::find($post_id);
        
        return view('edit-post', compact('post', 'category'));
    }

    public function update(ValidatePost $request, $post_id) 
    {
        
        $data = $request->validated();

        $post = Post::find($post_id);
        $post->name         = $data['name'];
        $post->description  = $data['description'];
        $post->category_id  = $data['category_id'];
        $post->slug         = $data['slug'];
        $post->created_by   = Auth::user()->id;
        if(request()->hasfile('image')) {
            $img       = request()->file('image');
            $img_name  = pathinfo($img->getClientOriginalName(), PATHINFO_FILENAME) .'-'.date('YmdHi').'.'.$img->getClientOriginalExtension();
            $img->move(public_path('uploads/post'), $img_name);
            $post->image = $img_name;
        }
        $post->update();

        return redirect('my-posts')->with('status', 'Post has been saved successfully');
        
    }


    public function updateStatus($post_id)  
    {
        $post = Post::find($post_id);
        $post->status = 1;
        $post->update();
        return redirect('my-posts')->with('status', 'Post has been deleted successfully');
    }
}
