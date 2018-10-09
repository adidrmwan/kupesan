<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebayaBiayaSewa extends Model
{
    protected $table = 'kebaya_biaya_sewa';
    protected $primaryKey = 'id_kebaya_biaya_sewa';
    public $timestamps = true;
    protected $fillable = [
        'fk_partner_id','fk_package_id', 'kebaya_durasi_hari', 'kebaya_biaya_sewa',
    ];
}
