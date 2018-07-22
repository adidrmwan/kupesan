<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'partner';
    public $timestamps = true;
    
    protected $fillable = [
        'user_id',
        'pr_logo',
        'pr_type',
        'pr_name',
        'pr_owner_name',
        'pr_addr',
        'pr_kel',
        'pr_kec',
        'pr_area',
        'pr_postal_code',
        'pr_desc',
        'pr_phone',
        'pr_phone2',
        'status',
        'open_hour',
        'close_hour',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
