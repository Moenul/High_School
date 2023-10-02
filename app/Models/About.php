<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo_id',
        'tagline',
        'institute_name',
        'institute_desc',
        'cover_id',
        'announce',
    ];

    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
    public function cover()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
