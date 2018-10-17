<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'partner';
    public $timestamps = true;
    protected $dates = ['booking_start_date', 'booking_end_date'];
    protected $fillable = [
        'user_id',
        'pr_logo',
        'pr_type',
        'pr_subtype',
        'pr_name',
        'pr_owner_name',
        'pr_addr',
        'pr_prov',
        'pr_kota',
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
