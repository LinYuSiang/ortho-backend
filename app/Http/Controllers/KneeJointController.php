<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KneeJoint\Create;
use App\Http\Requests\KneeJoint\Update;
use App\Repositories\PatientRepository;
use App\Repositories\KneeJointRepository;

class KneeJointController extends Controller
{
    protected $patientRepo;
    protected $kneeJointRepo;

    public function __construct(PatientRepository $patientRepo, KneeJointRepository $kneeJointRepo)
    {
        $this->patientRepo = $patientRepo;
        $this->kneeJointRepo = $kneeJointRepo;
    }

    public function index()
    {
        $kneeJoints = $this->kneeJointRepo->index(request(['medical_record_no']));
        return response()->json(['status' => 0, 'kneeJoints' => $kneeJoints]);
    }

    public function show($id)
    {
        $kneeJoint = $this->kneeJointRepo->find($id);
        
        if ($kneeJoint) {
            return response()->json(['status' => 0, 'kneeJoint' => $kneeJoint]);
        }

        return response()->json(['status' => 1, 'message' => 'Not found'], 404);
    }

    public function store()
    {

        // return gettype(request()->bmi);
        $params = $this->getSpecificParameters(request());
        $patient = $this->patientRepo->create($params);
        $kneeJoint = $this->kneeJointRepo->create($patient, $params);
    
        if ($kneeJoint) {
            return response()->json(['status' => 0]);
        }

        return response()->json(['status' => 1]);
    }

    public function update(Update $request, $id)
    {
        $params = $this->getSpecificParameters(request());
        $result = $this->kneeJointRepo->update($id, $params);

        if ($result) {
            return response()->json(['status' => 0]);
        }

        return response()->json(['status' => 1, 'message' => 'Not found'], 404);
    }

    public function destroy($id)
    {
        $result = $this->kneeJointRepo->delete($id);

        if ($result) {
            return response()->json(['status' => 0]);
        }

        return response()->json(['status' => 1, 'message' => 'Not found'], 404);
    }

    protected function getSpecificParameters(Request $request)
    {
        return request([
            'medical_record_no', 'name', 'birthday', 'gender', 'height', 'weight', 'bmi',
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
        ]);
    }
}
