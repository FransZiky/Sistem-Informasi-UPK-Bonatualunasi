<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule; 

use App\Laporan;
class LaporanController extends Controller
{
    public function index(){

        $laporans = Laporan::all();
        return view('pegawai.Laporan_akhir',["laporans"=>$laporans]);
    }

    public function tambahLaporan(){
        return view('pegawai.tambah_laporan_akhir');
    }
    
    public function cariLaporan(Request $request){
        $cari = $request->cari;
        $laporans = Laporan::where('periode', 'like', "%".$cari."%")
        ->orWhere('pemasukan', 'like', "%".$cari."%")
        ->orWhere('pengeluaran', 'like', "%".$cari."%")
        ->orWhere('saldo', 'like', "%".$cari."%")
        ->get();
        
        return view('pegawai.Laporan_akhir',["laporans"=>$laporans]);
    }

    public function tambahLaporanPost(Request $request){
        $data = new Laporan();
        $data->periode = $request->periode;
        $data->pemasukan = $request->pemasukan;
        $data->pengeluaran = $request->pengeluaran;
        $data->saldo = $request->saldo;
        $data->save();
        return redirect('laporan_akhir');
    }

    public function editLaporan($id){
        $data = Laporan::findOrFail($id);
        return view('pegawai.edit_laporan_akhir',compact('data'));
    }


    public function editLaporanPost(Request $request){
        $data = Laporan::where('id', $request->id)->first();
        $data->periode = $request->periode;
        $data->pemasukan = $request->pemasukan;
        $data->pengeluaran = $request->pengeluaran;
        $data->saldo = $request->saldo;
        
        $data->save();

        return redirect('laporan_akhir');
    }

    public function hapusLaporan($id){     
        Laporan::find($id)->delete();
    
        return redirect('laporan_akhir');
    }
}
