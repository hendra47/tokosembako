<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Flash;
use Response;
use Illuminate\Support\Facades\DB;

class laporan2 extends Controller
{
    public function cari(Request $request)
    {
        $input = $request->all();
        if(empty($input['tanggal']) OR empty($input['tanggal2']) ){
            $karyawan = DB::table('karyawan')
            ->select('id_karyawan','nama')
            ->get();
            Flash::error('Tanggal Harus Diisi');
            return view('pembayaran.laporan')->with(['karyawan'=>$karyawan]);
        }
            $karyawan = DB::table('karyawan')
            ->select('id_karyawan','nama')
            ->get();

            $absen = DB::table('absen')
            ->select(DB::raw('count(*) as user_count, id_karyawan'))
            ->where('tanggal','>=',$input['tanggal'])
            ->where('tanggal','<=',$input['tanggal2'])
            ->where('shift','=',$input['shift'])
            ->where('status','=','Hadir')
            ->groupBy('id_karyawan')
            ->get();
            if(count($absen)==0){
                Flash::error('Tidak ada data');
            }
            // dd($absen);
            return view('pembayaran.laporan')->with(['karyawan'=>$karyawan,'absens'=>$absen]);

    }
    public function laporan(Request $request)
    {
        $karyawan = DB::table('karyawan')
        ->select('id_karyawan','nama')
        ->get();
        return view('pembayaran.laporan')->with(['karyawan'=>$karyawan]);
    }
}
