<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebayaUkuran extends Model
{
    protected $table = 'kebaya_ukuran';
    public $timestamps = false;
    protected $fillable = [
        'partner_id', 'ukuran', 
        'panjang', 'lebar', 
    ];
}
