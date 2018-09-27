<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebayaBooking extends Model
{
    protected $primaryKey = 'booking_id';
    protected $table = 'kebaya_booking';
    public $timestamps = true;
    protected $dates = ['created_at', 'updated_at', 'start_date', 'end_date'];
    protected $fillable = [
        'user_id',
        'package_id',
        'partner_name',
        'user_name',
        'user_nohp',
        'user_email',
        'start_date',
        'end_date',
        'quantity',
        'booking_price',
        'booking_total',
        'booking_status',
        'booking_at',
        'kode_booking',
        'bukti_transfer',
        'alamat',
        'deposit',
    ];

    public function user_id()
    {
        return $this->belongsTo(User::class);
    }
    public function package_id()
    {
        return $this->belongsTo(KebayaProduct::class);
    }
}
