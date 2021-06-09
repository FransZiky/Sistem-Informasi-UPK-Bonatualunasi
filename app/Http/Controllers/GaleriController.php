<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;
use App\logo;

class GaleriController extends Controller
{
    public function showgaleri(){
        $galeris =galeri::all();
        return view('Admin.GaleriAdmin',['galeris'=>$galeris]);

    }
    public function LogoPost(Request $request){    
        
        logo::whereNotNull('id')->delete();
        $logo = new logo;
        $file = $request->file('logo');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('img/logo',$newName);
        $logo->logo = $newName;
        
        $logo->save();

        
        return redirect('/LogoAdmin');
    }
    public function GaleriPost(Request $request){    
        
        
        $galeris = new galeri;
        $galeris->judul_galeri = $request->judul_galeri;
        $galeris->subjudul_galeri = $request->subjudul_galeri;
        $file = $request->file('gambar_galeri');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('img/galeri',$newName);
        $galeris->gambar_galeri = $newName;
        
        $galeris->save();

        
        return redirect('/GaleriAdmin');
    }
    public function __construct()
    {
        $this->Galeri = new galeri();
    }

    public function edit($id_galeri)
    {
        if(!$this->Galeri->detailData($id_galeri)){
            abort(404);
        }

        $data = [
            'galeri' => $this->Galeri->detailData($id_galeri),
        ];
        return view('Admin.EditGaleriAdmin' , $data);
    }

    public function update($id_galeri)
    {
        Request()->validate([
            'judul_galeri' => 'required',
            'subjudul_galeri' => 'required',
            'gambar_galeri' => 'mimes:jpg,jpeg,png,bmp'
        ],
        [
            'judul_galeri.required' => 'Harus diisi!',
        ]
        );

        if(Request()->gambar_galeri <> ""){
            //jika ganti foto
            $file = Request()->gambar_galeri;
            $fileName = Request()->id.'.'.$file->extension();
            $file->move(public_path('/img/galeri') , $fileName);

            $data = [
                'judul_galeri' => Request()->judul_galeri,
                'subjudul_galeri' => Request()->subjudul_galeri,
                'gambar_galeri' =>$fileName
            ];

            $this->Galeri->editData($id_galeri, $data);
        }else{
            $data = [
                'judul_galeri' => Request()->judul_galeri,
                'subjudul_galeri' => Request()->subjudul_galeri,
            ];

            $this->Galeri->editData($id_galeri, $data);
        }

        return redirect('/GaleriAdmin');
    }

    public function delete($id_galeri)
    {
        Galeri::find($id_galeri)->delete();
    
        return redirect('/GaleriAdmin');
        // //hapus foto
        // $galeri = $this->Galeri->detailData($id_galeri);
        // if ($galeri->gambar_galeri <> "") {
        //     unlink(public_path('/img/galeri'. '/' . $galeri->gambar_galeri));
        // }

        // $this->Galeri->deleteData($id_galeri);
        // return redirect('/GaleriAdmin');
    }
}