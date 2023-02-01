<?php

namespace App\Http\Controllers;

use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends MyController
{
    //
    function index(){
        $data['name'] = "this is  my controller : " ;
        return parent::output('form/register',$data);
    }

    function create(Request $request){

        $request->validate([
            'email' => 'required'
        ]);
        $data['firstName'] = $request->input('firstName',' ');
        $data['lastName'] = $request->input('lastName',' ');
        $data['emali'] = $request->input('emali',' ');
        $data['username'] = $request->input('username',' ');
        $data['password'] = $request->input('password',' ');

        $users = DB::select('SELECT * FROM migrations');
        DB::insert(
            'INSERT IN TO users(name, email, password) values (?, ?, ?)' 
            [$data['firstName']." ".$data['lastName'],$data['email'],$data['password']]
        );
        return parent::output('form/register',$data);
    }
}
