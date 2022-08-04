<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome', [App\Http\Controllers\HomeController::class, 'index']);
}); */

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('post-category/{cat_id}', [App\Http\Controllers\PostCategoryController::class, 'index']);
Route::get('post-single/{post_id}', [App\Http\Controllers\PostSingleController::class, 'index']);


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{cat_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{cat_id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{cat_id}', [App\Http\Controllers\Admin\CategoryController::class, 'destory']);

    Route::get('adminPost', [App\Http\Controllers\Admin\AdminPostController::class, 'index']);
    Route::get('add-adminPost', [App\Http\Controllers\Admin\AdminPostController::class, 'create']);
    Route::post('add-adminPost', [App\Http\Controllers\Admin\AdminPostController::class, 'store']);
    Route::get('edit-adminPost/{post_id}', [App\Http\Controllers\Admin\AdminPostController::class, 'edit']);
    Route::put('update-adminPost/{post_id}', [App\Http\Controllers\Admin\AdminPostController::class, 'update']);
    Route::get('delete-adminPost/{cat_id}', [App\Http\Controllers\Admin\AdminPostController::class, 'destory']);
    Route::get('user', [App\Http\Controllers\Admin\UserController::class, 'index']);
});

Route::prefix('user')->middleware(['auth', 'isUser'])->group(function () {
   // Route::get('my-posts', [App\Http\Controllers\MyPostsController::class, 'index']);
  
  // Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
});
Route::get('my-posts', [App\Http\Controllers\MyPostsController::class, 'index']);
Route::get('post-delete/{post_id}', [App\Http\Controllers\MyPostsController::class, 'destory']);
//Route::get('adminPost', [App\Http\Controllers\Admin\AdminPostController::class, 'index']);
Route::get('add-post', [App\Http\Controllers\MyPostsController::class, 'create']);
Route::post('store-post', [App\Http\Controllers\MyPostsController::class, 'store']);
Route::get('edit-post/{post_id}', [App\Http\Controllers\MyPostsController::class, 'edit']);
Route::put('update-post/{post_id}', [App\Http\Controllers\MyPostsController::class, 'update']);
Route::post('add-comment', [App\Http\Controllers\HomeController::class, 'addComment']);

