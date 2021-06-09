<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
     
    public function dashboard_pegawai(){
        return view('pegawai.Pegawai');
    }

    public function changeLogo(){
        $file2 = $request->file('foto_logo');
        $ext = $file2->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file2->move('file',$newName);
    }
}
