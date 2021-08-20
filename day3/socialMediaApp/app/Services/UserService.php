<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class UserService
{
    function createNewUser(string $name)
    {

        $entries = array('name' => $name);
        DB::table('user')->insert($entries);
    }
}
