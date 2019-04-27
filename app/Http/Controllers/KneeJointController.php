<?php

namespace App\Http\Controllers;

use App\Repositories\KneeJointRepository;

class KneeJointController extends Controller
{
    protected $kneeJointRepo;

    public function __construct(KneeJointRepository $kneeJointRepo)
    {
        $this->kneeJointRepo = $kneeJointRepo;
    }

    public function index()
    {
        
    }
}
