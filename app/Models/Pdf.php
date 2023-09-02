<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pdf extends Model
{
    use HasFactory;

    protected $uploads = '/pdfs/';

    protected $fillable = ['file'];

    public function getFileAttribute($pdf)
    {
        return $this->uploads . $pdf;
    }
}
