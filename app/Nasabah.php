<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    protected $table="data_nasabah";
    protected $fillable=['nama', 'nomorkwitansi', 'nomorkredit','alamat', 'jenis_kelamin', 'jenis_peminjaman', 'jumlah_peminjaman', 'tanggal_peminjaman', 'tanggal_pencairan', 'tanggal_pembayaran'];
    public $timestamps=false;
}
