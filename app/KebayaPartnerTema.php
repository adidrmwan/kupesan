<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebayaPartnerTema extends Model
{
    protected $table = 'kebaya_partner_tema';
    public $timestamps = false;
    protected $fillable = [
        'partner_id', 'tema',
    ];
}
