<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_id',
        'name',
        'title'
    ];

    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
