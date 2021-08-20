<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class UserService
{
    function createNewUser(string $name,$data)
    {
        $validator = Validator::make($data, [
            'name' => ['required', 'max:255'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(),400);
        }
        $entries = array('name' => $name);
        DB::table('user')->insert($entries);
    }
}
