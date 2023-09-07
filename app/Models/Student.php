<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'student_name_en',
        'student_DOB',
        'student_birth_reg',
        'student_gender',
        'class_id',
        'student_roll',
        'student_section',
        'photo_id',
        'certificate_id',
        'status',
        'fathers_name',
        'fathers_name_en',
        'fathers_DOB',
        'fathers_birth_reg',
        'fathers_NID',
        'fathers_phone',
        'fathers_profession',
        'mothers_name',
        'mothers_name_en',
        'mothers_DOB',
        'mothers_birth_reg',
        'mothers_NID',
        'mothers_phone',
        'mothers_profession',
        'guardian_name',
        'guardian_name_en',
        'guardian_DOB',
        'guardian_birth_reg',
        'guardian_NID',
        'guardian_phone',
        'guardian_relation',
        'permanent_division',
        'permanent_district',
        'permanent_upazila',
        'permanent_postOffice',
        'permanent_postCode',
        'permanent_village',
        'present_division',
        'present_district',
        'present_upazila',
        'present_postOffice',
        'present_postCode',
        'present_village',
        'nationality',
        'religion',
        'physical_disability',

    ];

    public function class()
    {
        return $this->belongsTo('App\Models\Classs','class_id');
    }

    public function section()
    {
        return $this->belongsTo('App\Models\Section','student_section');
    }

    public function photo()
    {
        return $this->belongsTo('App\Models\Photo');
    }

    public function certificate()
    {
        return $this->belongsTo('App\Models\Photo');
    }
}
