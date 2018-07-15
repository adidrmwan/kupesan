<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PSThematicPkg extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'ps_pkg_them';
    public $timestamps = true;
    
    protected $fillable = [
        'pkg_name_them',
        'pkg_desc_them',
        'pkg_price_them',
        'pkg_img_them',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
