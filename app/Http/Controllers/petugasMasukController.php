<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\DB;
  use DateTime;

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
    public function add_stnk(){
        return view ('petugasMasuk.tambah');
    }
    public function tambah(Request $request){
         $stnk = $request->stnk;
        $tempatP = $request->tempatP;
        $cek = DB::select(DB::raw("SELECT * FROM detail_parkir as dt WHERE dt.stnk= '$stnk' AND IsNull(dt.keluar)"));
        $cek_stnk = DB::select(DB::raw("SELECT * FROM kendaraan as k where k.stnk='$stnk';"));
        if ($cek == null) {
            if ($cek_stnk == null) {
                DB::select(DB::raw("INSERT INTO `kendaraan` (`stnk`) VALUES ('$stnk')"));
            }
            $dt = new DateTime();
            DB::table('detail_parkir')->insert([
                'id' => NULL,
                'stnk' => $request->stnk,
                'tempat_parkir' => $request->tempatP,
                'masuk' => $dt,
                'keluar' => NULL
            ]);
            return redirect('petugasMasuk');
        } else {
            return redirect('petugasMasuk');
        }                       
    }
    public function logout(){
        Auth::logout();
        return redirect('/loginPetugasMasuk');
    }
}
