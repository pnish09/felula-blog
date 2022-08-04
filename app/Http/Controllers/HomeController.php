<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $post = Post::limit(5)->where('status', 0)->orderBy('created_at', 'desc')->get();
        $category = Category::all();

        return view('welcome', compact('post', 'category'));
    }

    public function addComment(Request $request) 
    {
       
    $comment = new Comment;
        $comment->name         = $request['name'];
        $comment->email  = $request['email'];
        $comment->comment  = $request['comment'];
        $comment->post_id         = $request['post_id'];
        
        $comment->save();

      return redirect()->to('post-single/'.$request['post_id']);
    }

    public function commentCount() 
    {
      // echo '123';
       // $commentCount = Comment::where('post_id', $post_id)->count();

      
    }
}
