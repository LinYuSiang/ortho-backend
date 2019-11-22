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
   
}
