<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table="laporan_akhir";
    protected $fillable=['periode', 'pemasukan', 'pengeluaran', 'saldo'];
    public $timestamps=false;
}
