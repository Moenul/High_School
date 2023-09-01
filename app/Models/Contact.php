<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_1',
        'phone_2',
        'facebook_link',
        'whatsapp_link',
        'youtube_link',
        'address',
        'address_link'
    ];
}
