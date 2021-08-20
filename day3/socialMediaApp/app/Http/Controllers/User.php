<?php


namespace App\Http\Controllers;
use App\Services\UserService;
use Illuminate\Http\Request;


Class User extends Controller
{
    private $userService;
    public function __construct()
    {
        $this->userService = new UserService();
    }
    function createUser(Request $request)
    {
        $name = $request->name;
        $data = $request->all();
        $this->userService->createNewUser($name,$data);
    }
}
