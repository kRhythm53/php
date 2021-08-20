<?php
namespace App\Http\Controllers;
use App\Services\CommentService;
use Illuminate\Http\Request;
Class Comment extends Controller
{
    private $commentService;
    public function __construct()
    {
        $this->commentService = new CommentService();
    }
    function createComment($user_id,$post_id,Request $request)
    {
        $body = $request->body;
        $data = $request->all();
        return $this->commentService->createNewComment($user_id,$post_id,$body,$data);
    }
    function getComments($post_id)
    {
        return $this->commentService->getAllComments($post_id);
    }
}
