<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule; 
use App\Users;
use Session;

use App\Pegawai;
use App\AkunPegawai;
class PegawaiController extends Controller
{
    public function index(){
        $pegawais = Pegawai::all();
        return view('pegawai.Pegawai',["pegawais"=>$pegawais]);
    }

    public function cariPegawai(Request $request){
        $cari = $request->cari;
        $pegawais = Pegawai::where('nama', 'like', "%".$cari."%")
        ->orWhere('alamat', 'like', "%".$cari."%")
        ->orWhere('jenis_kelamin', 'like', "%".$cari."%")
        ->orWhere('no_telepon', 'like', "%".$cari."%")
        ->get();
        
        return view('pegawai.Pegawai',["pegawais"=>$pegawais]);
    }
    
    public function delete($id){
        $pegawais = Pegawai::find($id);

        if(Session::get('role')=="admin"){
            $delete = $pegawais->delete();
            if($delete){
                return redirect()->intended('Pegawai_Admin');  
            }
        }
    
        // return view('pegawai.pegawai',["pegawais"=>$pegawais]);
    }
    
    public function tambahPegawai(){
        return view('pegawai.tambah_pegawai');
    }

     public function tambahPegawaiPost(Request $request){
        $data = new Pegawai();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->no_telepon = $request->nomor_telepon;

        $file1 = $request->file('foto_pegawai');
        $ext = $file1->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file1->move('file/pegawai',$newName);
        $data->foto = $newName;
        
        $data->save();

        return redirect('/daftar_akun_pegawai');
    }

     public function tambahAkunPegawaiPost(Request $request){
        $data = new Users();
        $data->username = $request->username;
        $data->password =  bcrypt($request->password);
        $data->role = "pegawai";
        
        $data->save();

        return redirect('Pegawai');
    }

    public function editPegawai($id){
        $data = Pegawai::findOrFail($id);
        return view('pegawai.edit_pegawai',compact('data'));
    }

    public function editPegawaiPost(Request $request){
        $data = Pegawai::where('id', $request->id)->first();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->no_telepon = $request->nomor_telepon;

        if(empty($request->file('foto_pegawai'))){
            $data->foto =  $data->foto;
        }else{
            unlink('file/pegawai/'.$data->foto);
            $file = $request->file('foto_pegawai');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('file/pegawai', $newName);
            $data->foto = $newName;
        }
        $data->save();
        return redirect('Pegawai');
    }
}