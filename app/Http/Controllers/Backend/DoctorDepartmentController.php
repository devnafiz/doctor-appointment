<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DoctoDepartmentRepository;

class DoctorDepartmentController extends AppBaseController
{
    private $DoctoDepartmentRepository;

    public function __construct(DoctoDepartmentRepository $DoctorDepartRepo){

    	$this->DoctoDepartmentRepository=$DoctorDepartRepo;
    }

    
}
