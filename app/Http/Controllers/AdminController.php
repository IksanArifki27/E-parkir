<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\CssSelector\Node\FunctionNode;
 use Illuminate\Support\Facades\DB;
 use DateTime;

class AdminController extends Controller
{

    public function halamanAdmin(){
        return view('admin.admin');
    }
    public function halamanLogin(){
        return view('admin.login');
    }
    public function postLogin(Request $request){
    //    $users = DB::table('users')->get();
    //     if(Auth::attempt($request->only('email','password'))){
    //         foreach ($users as $user) {
    //             if($user->level == 'admin'){
    //                 return redirect('/admin');                    
    //             }elseif($user->level == 'petugasM'){
    //                 return redirect('/petugasMasuk');
    //             }elseif($user->level == 'petugasK'){
    //                 return redirect('/petugasKeluar');
    //             }else{
    //                 return redirect('/login');
    //             }
    //         } 
    //         return redirect('/login');
    //     }
    //     return redirect('/login');
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
   
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))){
            if (auth()->user()->level == "admin") {
                return redirect("/admin");
            }elseif(auth()->user()->level == "petugasM") {
                return redirect('/petugasMasuk');
            }elseif(auth()->user()->level == "petugasK"){
                return redirect('/petugasKeluar');
            }elseif(auth()->user()->level == "petugasR"){
                return redirect('/petugasRuang');
            }
            else{
                return redirect('/login');
            }
        }else{
            return redirect('/login');
            
        }
    }

        
    public Function logout(){
        Auth::logout();
        return redirect('/login');
    }

    // create laporan crud
    public function user()
    {
          $data = DB::select(DB::raw('SELECT dp.id,dp.stnk, dp.masuk, dp.keluar, tp.kondisi, p.nama as jenis_parkir, m.nama as mall FROM detail_parkir as dp JOIN tempat_parkir as tp on tp.id=dp.tempat_parkir join parkiran as p on p.id=tp.id_parkiran join mall as m on m.id=p.id_mall;'));
        return view('admin.laporanP',['data' => $data]);
    }
    public function delete($id){
    // SELECT * FROM detail_parkir AS dp WHERE isNull(dp.keluar) AND isNull(dp.tempat_parkir);

        DB::table('detail_parkir')->where('id',$id)->delete();
    return redirect('admin');   
   }
    public function tambah(){
        // $data = DB::select(DB::raw('SELECT dp.id,dp.stnk, dp.masuk, dp.keluar FROM detail_parkir as dp where isNull(dp.keluar)'));
        return view('admin.tambah');

    }
    public function add_user(Request $request){
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
                'tempat_parkir' => NULL,
                'masuk' => $dt,
                'keluar' => NULL
            ]);
            return redirect('laporanP');
        } else {
            return redirect('laporanP/tambah');
        }                         
         
    }

    public function edit_user($user){
        $data = DB::table('users')->where('id',$user)->get();
        return view('/edit_user', ['data'=>$data]);
    }

    public function edit_user_aksi(Request $request){
        DB::table('users')->where('username',$request->username)
        ->update(['username'=>$request->username,
                'nama'=>$request->nama,
                'nohp'=>$request->nomor]);
        return redirect('user');
    }

}
