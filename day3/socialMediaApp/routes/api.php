<?php

use App\Http\Controllers\Comment;
use App\Http\Controllers\Post;
use App\Http\Controllers\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/user', [User::class, 'createUser']);
Route::post('/user/{user_id}/post', [Post::class, 'createPost']);
Route::get('/user/{user_id}/posts',[Post::class, 'getAllPosts']);
Route::get('/post/{post_id}',[Post::class, 'getPostById']);
Route::post('/user/{user_id}/post/{post_id}/comment',[Comment::class, 'createComment']);
Route::get('/post/{post_id}/comments',[Comment::class, 'getComments']);
