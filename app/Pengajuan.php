<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengajuan extends Model
{
    protected $table= 'pengajuan_peminjaman';
    protected $fillable= ['nama', 'alamat', 'email', 'jenis_kelamin', 'tanggal_lahir', 'jumlahpengajuanpeminjaman','foto_ktp','foto_keterangan','jenis_peminjaman','proposal'];
    public $timestamps= false;

    public function allData()
    {
        return DB::table('pengajuan_peminjaman')->get();
    }

    public function detailData($id_pengajuan)
    {
        return DB::table('pengajuan_peminjaman')->where('id', $id_pengajuan )->first();
    }
}
