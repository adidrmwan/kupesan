<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KebayaProduct extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'kebaya_product';
    public $timestamps = true;
    
    protected $fillable = [
        'partner_id',
        'partner_name',
        'name',
        'category',
        'set',
        'price',
        'quantity',
        'size',
        'image',
        'status',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
