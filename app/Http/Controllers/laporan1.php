<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\DB;
class laporan1 extends Controller
{
    public function cari(Request $request)
    {
        $input = $request->all();
        if(empty($input['tanggal']) OR empty($input['tanggal2']) ){
            $karyawan = DB::table('karyawan')
            ->select('id','nama')
            ->get();
            Flash::error('Tanggal Harus Diisi');
            return view('absens.laporan')->with(['karyawan'=>$karyawan]);
        }
            $karyawan = DB::table('karyawan')
            ->select('id','nama')
            ->get();

            $absen = DB::table('absen')
            ->select('*')
            ->where('tanggal','>=',$input['tanggal'])
            ->where('tanggal','<=',$input['tanggal2'])
            ->where('shift','=',$input['shift'])
            ->get();
            if(count($absen)==0){
                Flash::error('Tidak ada data');
            }
            return view('absens.laporan')->with(['karyawan'=>$karyawan,'absens'=>$absen]);

        // dd($input);
    }
    public function laporan(Request $request)
    {
        $karyawan = DB::table('karyawan')
        ->select('id','nama')
        ->get();

        return view('absens.laporan')->with(['karyawan'=>$karyawan]);
    }
}
