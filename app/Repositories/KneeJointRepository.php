<?php

namespace App\Repositories;

use App\Entities\KneeJoint;

class KneeJointRepository
{
    protected $kneeJoint;

    public function __construct(KneeJoint $kneeJoint)
    {
        $this->kneeJoint = $kneeJoint;
    }

    public function index(array $params = [])
    {
        if (empty($params)) {
            return $this->kneeJoint->with('patient')->get();
        }

        return $this->kneeJoint
            ->whereHas('patient', function ($query) use ($params) {
                $query->where('medical_record_no', $params['medical_record_no']);
            })
            ->with('patient')
            ->get();
    }

    public function find($id)
    {
        return $this->kneeJoint->with('patient')->find($id);
    }

    public function create($patient, array $params)
    {
        return $patient->kneeJoints()->create($params);
    }

    public function update($id, array $params)
    {
        $kneeJoint = $this->kneeJoint->find($id);
        return $kneeJoint ? $kneeJoint->update($params) : false;
    }

    public function delete($id)
    {
        return $this->kneeJoint->destroy($id);
    }
}
