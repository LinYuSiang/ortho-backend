<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'medical_record_no', 'name', 'birthday', 'gender',
        'height', 'weight', 'bmi',
    ];
}
