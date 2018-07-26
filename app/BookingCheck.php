<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingCheck extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'booking_check';
    public $timestamps = true;
    
    protected $fillable = [
        'partner_id',
        'package_id',
        'booking_date',
        'num_hour_1',
        'num_hour_2',
        'num_hour_3',
        'num_hour_4',
        'num_hour_5',
        'num_hour_6',
        'num_hour_7',
        'num_hour_8',
        'num_hour_9',
        'num_hour_10',
        'num_hour_11',
        'num_hour_12',
        'num_hour_13',
        'num_hour_14',
        'num_hour_15',
        'num_hour_16',
        'num_hour_17',
        'num_hour_18',
        'num_hour_19',
        'num_hour_20',
        'num_hour_21',
        'num_hour_22',
        'num_hour_23',
        'num_hour_24',
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }
}
