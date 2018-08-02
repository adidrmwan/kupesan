<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerTag extends Model
{
    protected $table = 'ps_package_tag';
    
    protected $fillable = [
        'package_id', 'tag_id',
    ];
}
