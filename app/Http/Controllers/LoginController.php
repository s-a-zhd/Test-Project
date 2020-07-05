<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    //
    public function index(Request $request){
        return view('login');
    }

    public function verify (Request $request){
        $validation = $request->validate([
            'email' => 'required',
            'password'=>'required|min:8',
        ]) ;

        $email = $request ->email;
        $password = $request ->password;

        $user = DB::table('users')
        ->where('email',$email)
        ->where('password',$password)
        ->first();
        if($user !=null){
            $request->session()->put('email' , $user->email);
            return redirect('/');
        }

        else{
            
            return Redirect()->back()->with('info',' Wrong Credintials');
        }
    }   
    
    
}
