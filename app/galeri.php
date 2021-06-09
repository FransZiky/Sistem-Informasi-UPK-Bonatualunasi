<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class galeri extends Model
{
    protected $table = 'galeri';
    protected $fillable = [
        'id','judul_galeri','subjudul_galeri','gambar_galeri'
    ];
    public $timestamps = false;

    public function detailData($id_galeri)
    {
        return DB::table('galeri')->where('id', $id_galeri )->first();
    }

    public function allData()
    {
        return DB::table('galeri')->get();
    }

    public function editData($id_galeri,$data)
    {
        DB::table('galeri')->where('id' , $id_galeri)->update($data);
    }

    public function deleteData($id_galeri)
    {
        DB::table('galeri')->where('id' , $id_galeri)->delete();
    }
}