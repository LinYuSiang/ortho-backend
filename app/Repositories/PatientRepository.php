<?php

namespace App\Repositories;

use App\Entities\Patient;

class PatientRepository
{
    public function create(array $data)
    {
        return Patient::firstOrCreate(
            ['medical_record_no' => $data['medical_record_no']],
            [
                'name' => $data['name'],
                'birthday' => $data['birthday'],
                'gender' => $data['gender'],
                'height' => $data['height'],
                'weight' => $data['weight'],
                'bmi' => $data['bmi']
            ]
        );
    }
}
