<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
#use Illuminate\Auth\Middleware\AdminMiddleware;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;



class DashboardController extends Controller
{
    public function index() 
    {
        $post = Post::where('status', 0)->count();
        $category = Category::where('status', 0)->count();
        $user = User::count();
        return view('admin.dashboard',  compact('post', 'category', 'user'));
    }
}
