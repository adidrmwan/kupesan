<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasilitasPartner extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'facilities_partner';
    public $timestamps = true;
    
    protected $fillable = [
        'facilities_id',
        'toilet',
        'wifi',
        'rganti',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
