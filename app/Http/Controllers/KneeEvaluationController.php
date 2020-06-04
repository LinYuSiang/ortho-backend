<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\kneeEvaluationRepository;

class KneeEvaluationController extends Controller
{
    protected $kneeEvaluationRepo;

    public function __construct( kneeEvaluationRepository $kneeEvaluationRepo)
    {
       
        $this->kneeEvaluationRepo = $kneeEvaluationRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = $this->kneeEvaluationRepo->index();

        if ($params) {
            return response()->json(['status' => 0, 'kneeEvaluation' => $params]);
        }

        return response()->json(['status' => 1, 'message' => 'Not found'], 404);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
      
        $params = $this->getSpecificParameters(request());
        $kneeEvaluation = $this->kneeEvaluationRepo->create($params);

        if ($kneeEvaluation) {
            return response()->json(['status' => 0]);
        }

        return response()->json(['status' => 1]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kneeEvaluation = $this->kneeEvaluationRepo->find($id);
       
        
        if ($kneeEvaluation) {
            return response()->json(['status' => 0, 'kneeEvaluation' => $kneeEvaluation]);
        }

        return response()->json(['status' => 1, 'message' => 'Not found'], 404);
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    protected function getSpecificParameters(Request $request)
    {
        return request([
            'knee_pain','joint_range','antero_posterior','medio_lateral',
            'varus_valgus','flexion_contracture','extension_lag','pains',
            'toal','name','surgery_date','medical_record_no','birthday'
        ]);
    }

    
}