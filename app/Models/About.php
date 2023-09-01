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
        'terms_condition',
        'privacy_policy'
    ];

    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
