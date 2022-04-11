<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class petugasMasukController extends Controller
{
    public function pageLoginPetugasM(){
        return view('petugasMasuk.loginPetugasM',[
            "title"=>"Page Login Petugas Masuk",
            "judulLogin"=>"PETUGAS MASUK",
        ]);
    }
    public function pageHome(){
        return view("petugasMasuk.petugasMasuk");
    }
    public function postLogin(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/petugasMasuk');
        }
        return redirect('/loginPetugasMasuk');
    }
}
