<?php

namespace App\Services;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\DB;

class CommentService
{
    function createNewComment($user_id,$post_id,$body)
    {
        $validator = Validator::make($request->all(), [
            'body' => ['required', 'max:255'],
            'heading' => ['required', 'max:255'],
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }

        $id = DB::table('comment')->insert([
            'body' => $body,'user_id'=>$user_id,'post_id'=> $post_id
        ]);
        return response()->json([
            'id' => $id ,
            'user_id' => $user_id,
            'body'  => $body,
            'post_id' => $post_id,
        ]);
    }
    function getAllComments($post_id)
    {
        $comments = DB::table('comment')->where('post_id', $post_id)->get();
        //$comments = $post->comments;
        return response()->json($comments);
    }
}
