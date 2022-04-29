<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\DB;

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
    public function data_keluar(){
        $data = DB::select(DB::raw('SELECT dp.id,dp.stnk, dp.masuk, dp.keluar, tp.kondisi, p.nama as jenis_parkir, m.nama as mall FROM detail_parkir as dp JOIN tempat_parkir as tp on tp.id=dp.tempat_parkir join parkiran as p on p.id=tp.id_parkiran join mall as m on m.id=p.id_mall;'));
        return view('petugasKeluar.keluar',['data' => $data]);
    }
    public function delete($id,$tempat){
        $dt = new DateTime();
        $date = $dt->format('Y-m-d H:i:s');
        DB::table('tempat_parkir')->where('id', $tempat)
            ->update([
                'kondisi' => 0
            ]);

        DB::table('detail_parkir')->where('id', $id)->update([
            'keluar' => $date,
        ]);
        return redirect('/petugasKeluar/keluar');
    }

    public function keluar($id, $tempat){
        $dt = new DateTime();
        $date = $dt->format('Y-m-d H:i:s');
        DB::table('tempat_parkir')->where('id', $tempat)
            ->update([
                'kondisi' => 0
            ]);

        DB::table('detail_parkir')->where('id', $id)->update([
            'keluar' => $date,
        ]);
        return redirect('/petugasKeluar/keluar');
    }

    public Function logout(){
        Auth::logout();
        return redirect('/loginPetugasKeluar');
    }
}
