<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\Session;
use App\Http\Middleware\UserAuth;

class UserController extends Controller
{
    
    function login_user(Request $req)
    {
        $user=User::where(['email'=>$req->email])->first();
    	if (!$user || !Hash::check($req->password,$user->password)) 
    	 {
    	 	return "Username or password is not matched";
    	 } 
    	 else
    	 {
    	 	$req->session()->put('user',$user);
            return redirect('/product');   
    	 }
    }

    function logout(Request $req)
    {
        $req->Session()->forget('user');
        return redirect('/login');
    }

    // function login_user(Request $req)
    // {
    //     // $email=$req->input('email');
    //     // $password=$req->input('password'); 
    //     // // $password=$req->input('password');
    //     // $result=User::select('select * from users where email=?'.$email.'and password=?'.$password);
    //     // if ($result) 
    //     // {
    //     //    return redirect('product');
    //     // }
    //     // // else
    //     // // {
    //     // //  return redirect('login_form')->with('fail','Please enter valid email and password');   
    //     // // }
    // }
}
