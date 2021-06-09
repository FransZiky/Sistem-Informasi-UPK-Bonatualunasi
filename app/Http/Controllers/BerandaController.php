<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule; 

use App\Pengajuan;
use App\Lowongan;
use App\logo;
use App\galeri;

class BerandaController extends Controller
{
    public function pengajuan(){
        return view('pengajuan');
    }

    public function pengajuanPost(Request $request){

        $data = new Pengajuan();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jumlahpengajuanpeminjaman = $request->jumlahpengajuanpeminjaman;
        $file1 = $request->file('ktp');
        $ext = $file1->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file1->move('file/ktp',$newName);
        $data->foto_ktp = $newName;
        
        $file2 = $request->file('surat_desa');
        $ext = $file2->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file2->move('file/keterangan',$newName);
        $data->foto_keterangan = $newName;
        $data->jenis_peminjaman = $request['jenis_peminjaman'];

        $file3 = $request->file('proposal');
        $ext = $file3->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file3->move('file/proposal',$newName);
        $data->proposal = $newName;
        $data->save();

        return redirect('pengajuan');
    }
    public function loker(){
        return view('lowongan_kerja');
    }

    public function lokerPost(Request $request){

        $data = new Lowongan();
        $data->nama_lengkap = $request->nama;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $file1 = $request->file('ijazah');
        $ext = $file1->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file1->move('file/ktp',$newName);
        $data->ijzah = $newName;
        
        $file2 = $request->file('surat_desa');
        $ext = $file2->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file2->move('file/keterangan',$newName);
        $data->surat_keterangan = $newName;
        
        $file3 = $request->file('foto_formal');
        $ext = $file3->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file3->move('file/foto_formal',$newName);
        $data->foto_formal = $newName;
        
        $file4 = $request->file('surat_lamaran');
        $ext = $file4->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file4->move('file/surat_lamaran',$newName);
        $data->surat_lamaran = $newName;
        $data->save();

        return redirect('lowongan_kerja');
    }
    public function showBeranda(){    
        
        
        $logos =logo::all();
        
        return view('Admin.BerandaAdmin',['logos' => $logos]);
    }
    public function showlogin(){    
        
        
        $logos =logo::all();
        
        return view('masuk',['logos' => $logos]);
    }
    public function showberandauser(){      
        $galeri = galeri::all();
        $logos =logo::all();
        return view('index' ,['logos' => $logos], ['galeri' => $galeri]);
    }
    public function Pegawai(){    
        
        
        $logos =logo::all();
        
        return view('pegawai.Pegawai',['logos' => $logos]);
    }

    // public function __construct()
    // {
    //     $this->Galeri = new galeri();
    // }

    public function dashboard_admin(){
    $galeri = galeri::all();
        $logos =logo::all();
        return view('Admin.BerandaAdmin' ,['logos' => $logos], ['galeri' => $galeri]);
    }
}