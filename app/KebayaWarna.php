<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebayaWarna extends Model
{
    protected $table = 'kebaya_warna';
    
    protected $fillable = [
        'warna_id', 'warna_name',
    ];
}
