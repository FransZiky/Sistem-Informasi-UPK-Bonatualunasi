<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    protected $table="data_pegawai";
    protected $fillable=['nama', 'alamat', 'no_telepon','foto','jenis_kelamin'];
    public $timestamps=false;
}
