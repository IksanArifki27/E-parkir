<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\CssSelector\Node\FunctionNode;
 use Illuminate\Support\Facades\DB;

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

    // create laporan crud
    public function user()
    {
          $data = DB::select(DB::raw('SELECT dp.id,dp.stnk, dp.masuk, dp.keluar, tp.kondisi, p.nama as jenis_parkir, m.nama as mall FROM detail_parkir as dp JOIN tempat_parkir as tp on tp.id=dp.tempat_parkir join parkiran as p on p.id=tp.id_parkiran join mall as m on m.id=p.id_mall;'));
        return view('admin.laporanP',['data' => $data]);
    }
    public function delete($id){
        DB::table('users')->where('id',$id)->delete();
    return redirect('user');   
   }
    public function tambah(){
        // $data = 
        // return view('admin.tambah');
    }

    public function add_user(Request $request){
        DB::table('users')->insert(['username'=>$request->username,
                                    'nama'=>$request->nama,
                                    'nohp'=>$request->nomor]);
                                   
         return redirect('user');
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
