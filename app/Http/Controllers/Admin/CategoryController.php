<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\ValidateCategory;
class CategoryController extends Controller
{
    public function index() 
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function create() 
    {
        return view('admin.category.create');
    }

    public function store(ValidateCategory $request) 
    {
        $data = $request->validated();

        $category = new Category;
        $category->name         = $data['name'];
        $category->description  = $data['description'];
        $category->slug         = $data['slug'];
        $category->created_by         = Auth::user()->id;
        $category->save();
        return redirect('admin/add-category')->with('status', 'Category has been saved successfully');
    }
    public function edit($cat_id) 
    {
        $category = Category::find($cat_id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(ValidateCategory $request, $cat_id) 
    {
        $data = $request->validated();

        $category = Category::find($cat_id);
        $category->name         = $data['name'];
        $category->description  = $data['description'];
        $category->slug         = $data['slug'];
        $category->created_by         = Auth::user()->id;
        $category->update();
        return redirect('admin/category')->with('status', 'Category has been saved successfully');
        
    }

    public function destory($cat_id)  
    {
        $category = Category::find($cat_id);
        $category->delete();
        return redirect('admin/category')->with('status', 'Category has been deleted successfully');
    }


}
