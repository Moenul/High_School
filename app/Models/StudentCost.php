<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCost extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'session_fee',
        'tuition_fee',
    ];

    public function class()
    {
        return $this->belongsTo('App\Models\Classs','class_id');
    }


}
