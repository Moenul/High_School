<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function student()
    {
        return $this->hasMany('App\Models\Student','class_id');
    }

    public function routine()
    {
        return $this->hasMany('App\Models\Routine','class_id');
    }

}
