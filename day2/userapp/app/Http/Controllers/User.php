<?php

use App\Http\Controllers\Controller;

class User extends Controller
{
    function create(Request $request) {
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
            $users = DB::table('users')->where('id', '=', $id)->get();

        } else {
            $users = DB::table('users')->select('id', 'first_name', 'last_name')->get();
        }
    }
}
