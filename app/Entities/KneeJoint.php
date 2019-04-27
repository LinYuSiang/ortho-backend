<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class KneeJoint extends Model
{
    protected $fillable = [
        'patient_id',
        'type', 'type_other',
        'surgery_date',
        'valgus', 'valgus_other', 'leg',
        'anesthesia', 'anesthesia_other',
        'rom_one', 'rom_two',
        'pre_op_patellar_tracking', 'knee_score', 'approach', 'approach_other', 'approach_type',
        'femoral_size', 'ps_type', 'insert_thickness', 'self_pay',
        'tibia_size', 'patlla_size', 'thickness', 'femoral_extemsion_stem_size', 'tibia_extemsion_stem_size',
        'wedge_part', 'wedge_thickness',
        'lateral_release', 'patellar_tracking',
        'pre_op', 'post_op',
        'bone_cement', 'antibiotic', 'systolic', 'diastolic', 'tourniquet_pressure', 'hemostasis_time',
        'special_circumstances', 'clexanes',
        'remark', 'remark_other', 'others',
        'pca', 'pai',
        'tencam', 'transamine', 'transamine_text',
        'medial_distal', 'medial_posterior', 'medial_tibai',
        'lateral_distal', 'lateral_posterior', 'lateral_tibai',
    ];
}
