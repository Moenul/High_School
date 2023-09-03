<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_id',
        'status'
    ];


    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
