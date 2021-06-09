<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengumuman extends Model
{
    protected $table = "pengumuman";
    protected $primaryKey = 'id_pengumuman';
    protected $fillable = ['id_pengumuman','judul','tanggal','isi', 'nama_pembuat'];
    public $timestamps= false;

    public function detailData($id_pengumuman)
    {
        return DB::table('pengumuman')->where('id_pengumuman', $id_pengumuman)->first();
    }
}
