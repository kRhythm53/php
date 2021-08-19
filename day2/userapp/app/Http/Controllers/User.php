<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class User extends Controller
{
    function create(Request $request) {
        echo "hii";
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $entries = array('first_name' => $first_name, 'last_name' => $last_name);
        DB::table('users')->insert($entries);
    }

    function delete($id) {
        DB::table('users')->where('id', '=', $id)->delete();
    }

    function get($id=''){
        if($id!=''){
         } else {
            $users = DB::table('users')->select('id', 'first_name', 'last_name')->get();
        }
        foreach ($users as $user) {
            print_r($user);
        }
    }
}
