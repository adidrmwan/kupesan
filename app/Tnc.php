<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tnc extends Model
{
    protected $table = 'ps_tnc';
    public $timestamps = false;
    protected $fillable = [
        'partner_id', 'tnc_desc',
    ];
}
