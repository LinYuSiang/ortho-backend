<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class KneeEvaluation extends Model
{
    protected $fillable = [
        'knee_pain','joint_range','antero_posterior','medio_lateral',
        'varus_valgus','flexion_contracture','extension_lag','pains',
        'toal','name','surgery_date','medical_record_no','birthday'
    ];
}
