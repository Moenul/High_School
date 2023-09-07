<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'routine',
    ];

    public function class()
    {
        return $this->belongsTo('App\Models\Classs','class_id');
    }

}
