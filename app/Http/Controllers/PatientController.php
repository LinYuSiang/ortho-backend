<?php

namespace App\Http\Controllers;

class PatientController extends Controller
{
    public function getKneeJoints()
    {
        $kneeJointRecords = auth()->guard('patient')->user()->kneeJoints()->with('patient')->get();
        return response()->json($kneeJointRecords);
    }
}
