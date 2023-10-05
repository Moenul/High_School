<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_id',
        'name',
        'slug',
        'title',
        'desc',
    ];


    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
