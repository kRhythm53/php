<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostService
{
    function createNewPost($body,$heading,$user_id,$data)
    {

        $validator = Validator::make($data, [
            'body' => ['required', 'max:255'],
            'heading' => ['required', 'max:255'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        $id = DB::table('post')->insertGetId([
            'user_id' => $user_id,
            'heading' => $heading,
            'body'  => $body,
        ]);
        return response()->json([
            'id' => $id ,
            'user_id' => $user_id,
            'heading' => $heading,
            'body'  => $body,
        ]);
    }

    function getAllPostsOfUser($user_id)
    {
        $posts = DB::table('post')->where('user_id', $user_id)->get();
        /*echo $posts;
        $user = DB::table('user')->where('id', $user_id)->first();
        $user = User::find($user_id);
        $ts = $user->Posts;*/
        return response()->json($posts);
    }

    function getPostByPostId($post_id)
    {
        $post = DB::table('post')->where('id', $post_id)->first();
        return response()->json($post);
    }

}
