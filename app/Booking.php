<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $primaryKey = 'booking_id';
    protected $table = 'booking';
    public $timestamps = true;
    
    protected $fillable = [
        'booking_user_name',
        'booking_user_nohp',
        'booking_user_email',
        'package_id',
        'partner_name',
        'booking_start_date',
        'booking_end_date',
        'booking_start_time',
        'booking_end_time',
        'booking_overtime',
        'booking_capacities',
        'booking_normal_price',
        'booking_overtime_price',
        'booking_total',
        'booking_status',
        'kode_booking',
        'bukti_transfer',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
