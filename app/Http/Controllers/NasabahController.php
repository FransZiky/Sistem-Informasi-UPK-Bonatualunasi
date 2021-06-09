<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule; 

use App\Nasabah;
class NasabahController extends Controller
{
    public function index(){

        $nasabahs = Nasabah::all();
        return view('pegawai.Nasabah',["nasabahs"=>$nasabahs]);
    }

    public function cariNasabah(Request $request){
        $cari = $request->cari;
        $nasabahs = Nasabah::where('nama', 'like', "%".$cari."%")
        ->orWhere('jenis_kelamin', 'like', "%".$cari."%")
        ->orWhere('nomorkwitansi', 'like', "%".$cari."%")
        ->orWhere('nomorkredit', 'like', "%".$cari."%")
        ->orWhere('alamat', 'like', "%".$cari."%")
        ->orWhere('jenis_peminjaman', 'like', "%".$cari."%")
        ->orWhere('tanggal_peminjaman', 'like', "%".$cari."%")
        ->orWhere('tanggal_pencairan', 'like', "%".$cari."%")
        ->orWhere('tanggal_pembayaran', 'like', "%".$cari."%")
        ->get();
        
        return view('pegawai.Nasabah',["nasabahs"=>$nasabahs]);
    }

    public function tambahNasabah(){
        return view('pegawai.tambah_nasabah');
    }

    public function tambahNasabahPost(Request $request){
        $data = new Nasabah();
        $data->nama = $request->name;
        $data->nomorkwitansi = $request->nomorkwitansi;
        $data->nomorkredit = $request->nomorkredit;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->jenis_peminjaman = $request->jenis_pembayaran;
        $data->jumlah_peminjaman = $request->jumlah_peminjaman;
        $data->tanggal_peminjaman = $request->tanggal_peminjaman;
        $data->tanggal_pencairan = $request->tanggal_pencairan;
        $data->tanggal_pembayaran = $request->tanggal_pembayaran;
        $data->save();

        return redirect('Nasabah');
    }

    public function editNasabah($id){


        $data = Nasabah::findOrFail($id);
        return view('pegawai.edit_nasabah',compact('data'));
    }

    public function editNasabahPost(Request $request){
        $data = Nasabah::where('id', $request->id)->first();
        $data->nama = $request->name;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->jenis_peminjaman = $request->jenis_pembayaran;
        $data->jumlah_peminjaman = $request->jumlah_peminjaman;
        $data->tanggal_peminjaman = $request->tanggal_peminjaman;
        $data->tanggal_pencairan = $request->tanggal_pencairan;
        $data->tanggal_pembayaran = $request->tanggal_pembayaran;
        $data->save();

        return redirect('Nasabah');
    }

    public function hapusNasabah($id){     
        Nasabah::find($id)->delete();
    
        return redirect('Nasabah');
    }
}
