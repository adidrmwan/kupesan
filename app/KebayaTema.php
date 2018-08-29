<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebayaTema extends Model
{
    protected $table = 'kebaya_tema';
    
    protected $fillable = [
        'tema_id', 'tema_name',
    ];
}
