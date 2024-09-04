<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $req){
        $req->validate([
            'name'=>'required | min:3 | max:15 | uppercase',  //uppercase is custom validation rule
            'email'=>'required | email',
            'mobile'=>'required | min:10 | max:11'
        ],[
            'name.required'=> 'name field can not be empty',
            'name.uppercase'=> 'city must be in upper case!', //this is custom massege for custom validation
            'name.min'=>'name must be more then 2 character',
            'name.max'=>'name must be less then 15 character',
            'email.requied'=> 'email field can not be empty',
            'email.email'=> 'Pleace correct email enter in the field',
            'mobile.requied'=>'mobile feild can not be empty',
            'mobile.min'=>'mobile no. cantain minimum 10 character',
            'mobile.max'=>'mobile no. cantain maximum 11 character'
        ]);
        return $req;

    }
}
