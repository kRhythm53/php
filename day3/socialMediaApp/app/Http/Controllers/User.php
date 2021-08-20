<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

Class User extends Controller
{
    function createUser(Request $request)
    {
        $name = $request->name;
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }
        $obj = new UserService();
        $obj->createNewUser($name);
    }
}
