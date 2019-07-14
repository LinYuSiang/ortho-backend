<?php

namespace App\Http\Controllers;

use App\Http\Requests\Patient\Auth;
use App\Repositories\PatientRepository;

class PatientAuthController extends Controller
{
    protected $patientRepo;

    public function __construct(PatientRepository $patientRepo)
    {
        $this->middleware('auth:patient')->except('login');
        $this->patientRepo = $patientRepo;
    }

    public function login(Auth $request)
    {
        $credentials = request(['medical_record_no']);
        $patient = $this->patientRepo->getPatient($credentials);

        if ($patient) {
            return $this->respondWithToken(auth()->guard('patient')->tokenById($patient->id));
        }

        return response()->json(['status' => 1, 'message' => 'Unauthorized'], 401);
    }

    public function me()
    {
        return response()->json(auth()->guard('patient')->user());
    }

    public function logout()
    {
        auth()->guard('patient')->logout();
        return response()->json(['status' => 0]);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth()->guard('patient')->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'status' => 0,
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
