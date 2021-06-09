<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class loginController extends Controller
{
    public function masuk(){
        return view('/masuk');
    }
    public function loginPost(Request $request){
        $this->validate($request,[
            'username' =>'required',
            'password'=>'required'
        ]);
        $username = $request->username;
        $password = $request->password;
        

        $data = Users::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                if($data->role=='admin'){
                    Session::put('role', $data->role);
                    Session::put('username', $data->username);
                    Session::put('masuk',TRUE);
                    return redirect('dashboard_admin');
                }elseif($data->role=='pegawai'){
                    Session::put('role', $data->role);
                    Session::put('username', $data->username);
                    Session::put('masuk',TRUE);
                    return redirect('Pegawai');
                }
            }
            else{
                
                return redirect('masuk')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
         
            return redirect('masuk')->with('alert','Password atau Email, Salah!');
        }
    }
        
    public function logout(){
        Session::flush();
        return redirect('masuk')->with('alert','Kamu sudah logout');
    }


}