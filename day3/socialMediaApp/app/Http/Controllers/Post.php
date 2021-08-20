<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;


Class Post extends Controller
{
    function createPost($user_id,Request $request)
    {

        $obj = new PostService();
        $body = $request->body;
        $heading = $request->heading;
        return $obj->createNewPost($body,$heading,$user_id);
    }
    function getAllPosts($user_id)
    {
        $obj = new PostService();
        return $obj->getAllPostsofUser($user_id);
    }
    function getPostById($post_id)
    {
        $obj = new PostService();
        return $obj->getPostByPostId($post_id);
    }
}
