<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class petugasRuangController extends Controller
{
    public function pageRuang(){
        $datas = DB::select('SELECT * FROM detail_parkir AS dp WHERE isNull(dp.keluar) AND isNull(dp.tempat_parkir);');
        return view("petugasRuang.petugasR",['datas'=>$datas]);
    }

    public function pageEdit(){
        return view ('petugasRuang.edit');
    }

    public function editParkir($stnk, $id_dp){
        $tempat_parkir = DB::select('SELECT * FROM tempat_parkir as tp WHERE tp.kondisi = false');
        return view("petugasRuang.edit", ['id_dp'=>$id_dp, 'stnk'=>$stnk, 'tempat_parkir' => $tempat_parkir]);
    }
    public function edit_kendaraan(Request $request){
        
        DB::table('tempat_parkir')->where('id',$request->tp_id)->update(['kondisi'=>1]);
        DB::table('detail_parkir')->where('id',$request->id_dp)->update(['tempat_parkir'=> $request->tp_id]);
        DB::table('detail_parkir')->where('id',$request->id_dp)->update([
            'tempat_parkir'=> $request->tp_id
        ]);
        return redirect('/petugasRuang');
    }
}
