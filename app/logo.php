<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logo extends Model
{
    protected $table = 'logo';
    protected $fillable = [
        'id','logo'
    ];
    public $timestamps = false;
}
