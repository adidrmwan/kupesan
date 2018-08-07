<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PSPkg extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'ps_package';
    public $timestamps = true;
    
    protected $fillable = [
        'pkg_name_them',
        'pkg_category_them',
        'pkg_desc_them',
        'pkg_price_them',
        'pkg_overtime_them',
        'pkg_duration_them',
        'pkg_img_them',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
