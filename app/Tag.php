<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'ps_tag';
    
    protected $fillable = [
        'tag_id', 'tag_title',
    ];
}
