<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidatePost;

class AdminPostController extends Controller
{
    public function index() 
    {
        $post = Post::all();
        return view('admin.post.index', compact('post'));
    }

    public function create() 
    {
        $category = Category::all();
        return view('admin.post.create', compact('category'));
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

        return redirect('admin/add-adminPost')->with('status', 'Post has been saved successfully');
    }

    public function edit($post_id) 
    {
        $category = Category::all();
        
        $post = Post::find($post_id);
        
        return view('admin.post.edit', compact('post', 'category'));
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

        return redirect('admin/adminPost')->with('status', 'Post has been saved successfully');
        
    }

    public function destory($post_id)  
    {
        $post = Post::find($post_id);
        $post->delete();
        return redirect('admin/adminPost')->with('status', 'Post has been deleted successfully');
    }

}
