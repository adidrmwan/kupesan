<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebayaBookingAddress extends Model
{
    protected $table = 'kebaya_booking_address';
    protected $primaryKey = 'id_booking_address';
    public $timestamps = true;
    protected $fillable = [
        'user_id','booking_id', 'pr_addr', 'pr_prov',
        'pr_kota','pr_kel', 'pr_kec', 'pr_postal_code', 'flag',
    ];
}
