<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerDurasi extends Model
{
    protected $table = 'ps_durasi';
    public $timestamps = true;
    protected $fillable = [
        'partner_id','package_id', 'durasi_jam', 'durasi_harga',
    ];
}
