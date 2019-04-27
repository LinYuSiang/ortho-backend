<?php

namespace App\Http\Controllers;

use App\Repositories\PatientRepository;

class PatientController extends Controller
{
    protected $patientRepo;

    public function __construct(PatientRepository $patientRepo)
    {
        $this->patientRepo = $patientRepo;
    }
}
