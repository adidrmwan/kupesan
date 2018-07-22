<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'album';
    public $timestamps = true;
    
    protected $fillable = [
        'album_img_1',
        'album_img_2',
        'album_img_3',
        'album_img_4',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
