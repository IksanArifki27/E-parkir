<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugasKeluarController extends Controller
{
    public function pageLoginPetugasK(){
        return view('petugasKeluar.loginPetugasKeluar');
    }
}
