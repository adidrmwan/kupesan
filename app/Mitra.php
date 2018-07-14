<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Mitra extends Authenticatable
{
	protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'password','provider','provider_id','is_activated',
    ];

    protected $hidden = [
    'password', 'remember_token',
    ];
}