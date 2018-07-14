<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'partner';
    public $timestamps = true;
    
    protected $fillable = [
        'user_id', 'partner_type', 'partner_name', 'partner_owner_name', 
        'partner_address', 'partner_area', 'partner_postal_code', 'partner_description', 'partner_telephone' 
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
