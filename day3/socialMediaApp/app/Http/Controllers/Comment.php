<?php
namespace App\Http\Controllers;
use App\Services\CommentService;
use Illuminate\Http\Request;

Class Comment extends Controller
{
    private $commentObject;
    function createComment($user_id,$post_id,Request $request)
    {

        $body = $request->body;
        echo $body;
        $commentObj = new CommentService();
        return $commentObj->createNewComment($user_id,$post_id,$body);
    }
    function getComments($post_id)
    {
        $commentObj = new CommentService();
        return $commentObj->getAllComments($post_id);
    }
}
