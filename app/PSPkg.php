<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PSPkg extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'ps_package';
    public $timestamps = true;
    
    protected $fillable = [
        'user_id',
        'pkg_name_them',
        'pkg_category_them',
        'pkg_desc_them',
        'pkg_price_them',
        'pkg_overtime_them',
        'pkg_duration_them',
        'pkg_fotografer',
        'pkg_print_size',
        'pkg_edited_photo',
        'pkg_capacity',
        'pkg_frame',
        'pkg_img_them',
        'pkg_img_them2',
        'pkg_img_them3',
        'pkg_img_them4',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
