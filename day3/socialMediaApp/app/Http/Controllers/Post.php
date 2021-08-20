<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;


class Post extends Controller
{
    private $postService;

    public function __construct()
    {
        $this->postService = new PostService();
    }

    function createPost($user_id, Request $request)
    {

        $body = $request->body;
        $heading = $request->heading;
        $data = $request->all();
        return $this->postService->createNewPost($body, $heading, $user_id, $data);
    }

    function getAllPosts($user_id)
    {
        return $this->postService->getAllPostsofUser($user_id);
    }

    function getPostById($post_id)
    {
        return $this->postService->getPostByPostId($post_id);
    }
}
