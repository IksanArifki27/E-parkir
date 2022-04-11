<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\CssSelector\Node\FunctionNode;

class AdminController extends Controller
{

    public function halamanAdmin(){
        return view('admin.admin');
    }
    public function halamanLogin(){
        return view('admin.login');
    }
    public function postLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/admin');
        }
        return redirect('/login');
        // dd($request->all());
    }
    public Function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
