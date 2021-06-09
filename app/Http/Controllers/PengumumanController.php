<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::all();
        return view('Admin.PengumumanAdmin', compact('pengumuman'));
    }

    public function __construct()
    {
        $this->Pengumuman = new Pengumuman();
    }

    public function detail($id_pengumuman)
    {
        if(!$this->Pengumuman->detailData($id_pengumuman)){
            abort(404);
        }

        $data = [
            'pengumuman' => $this->Pengumuman->detailData($id_pengumuman),
        ];
        return view('Admin.CreatePengumuman.DetailPengumuman',$data);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.TambahPengumumanAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Pengumuman();
        $data->judul = $request->judul;
        $data->tanggal = $request->tanggal_pengumuman;
        $data->isi = $request->isi_pengumuman   ;
        $data->nama_pembuat = $request->nama_pembuat;
        $data->save();
        
        return redirect()->intended('Pengumuman_Admin'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengumuman = Pengumuman::find($id);

        return view('Admin.EditPengumumanAdmin', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Pengumuman::find($id);
        $data->judul = $request->judul;
        $data->tanggal = $request->tanggal_pengumuman;
        $data->isi = $request->isi_pengumuman   ;
        $data->nama_pembuat = $request->nama_pembuat;
        $data->update();
        
        return redirect('Pengumuman_Admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);
        $pengumuman->delete();
        return redirect('Pengumuman_Admin');
    }

    public function showPengumumanUser(){    
        $pengumuman =Pengumuman::all();
        
        return view('/pengumuman',['pengumuman'=> $pengumuman]);
    }
}
