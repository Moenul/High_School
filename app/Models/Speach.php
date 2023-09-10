<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speach extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_type',
        'photo_id',
        'name',
        'title',
        'desc',
    ];

    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
