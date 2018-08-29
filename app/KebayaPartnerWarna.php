<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebayaPartnerWarna extends Model
{
    protected $table = 'kebaya_partner_warna';
    public $timestamps = false;
    protected $fillable = [
        'partner_id', 'warna',
    ];
}
