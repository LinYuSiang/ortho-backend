<?php

namespace App\Repositories;

use App\Entities\KneeEvaluation;

class KneeEvaluationRepository
{
    protected $KneeEvaluation;

    public function __construct(KneeEvaluation $KneeEvaluation)
    {
        $this->KneeEvaluation = $KneeEvaluation;
    }
    public function create( array $params)
    {
        
        return $this->KneeEvaluation->create($params);
    }
    public function index()
    {
        return $this->KneeEvaluation->get();
    }
    public function find($id)
    {
        return $this->KneeEvaluation->find($id);
    }
}
