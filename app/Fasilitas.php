<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'facilities';
    
    protected $fillable = [
        'facilities_name',
    ];
}
