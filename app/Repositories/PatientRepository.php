<?php

namespace App\Repositories;

use App\Entities\Patient;

class PatientRepository
{
    protected $patient;

    public function __construct(Patient $patient)
    {
        $this->patient = $patient;
    }

    public function create(array $data)
    {
        return $this->patient->updateOrCreate(
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
