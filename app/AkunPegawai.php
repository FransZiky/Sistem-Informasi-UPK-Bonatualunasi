<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AkunPegawai extends Model
{
    protected $table="pegawai";
    protected $fillable=['id_pegawai', 'username', 'password'];
    public $timestamps=false;
}
