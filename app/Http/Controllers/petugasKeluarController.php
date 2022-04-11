<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class petugasKeluarController extends Controller
{
    public function pageLoginPetugasK(){
        return view('petugasKeluar.loginPetugasKeluar',[
            "title"=>"Page Login Petugas Keluar",
            "judulLogin"=>"PETUGAS KELUAR",
        ]);
    }

    public function pageHome(){
        return view('petugasKeluar.PetugasKeluar',[
            "title"=>"Petugas Keluar",
        ]);
    }
    public function postLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/petugasKeluar');
        }
        return redirect('/loginPetugasKeluar');
        // dd($request->all());
    }
    public Function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
