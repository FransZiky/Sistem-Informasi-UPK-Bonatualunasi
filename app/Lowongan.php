<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table= 'pendaftaran_kerja';
    protected $primaryKey = 'no_pendaftar';
    protected $fillable= ['nama_lengkap', 'alamat', 'jenis_kelamin','tanggal_lahir','ijazah','surat_keterangan','foto_formal','surat_lamaran'];
    public $timestamps= false;

}
