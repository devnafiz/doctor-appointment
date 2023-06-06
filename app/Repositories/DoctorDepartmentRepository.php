<?php


namespace App\Repositories;

use App\Models\DoctorDepartment;

/**
 * 
 */
class DoctoDepartmentRepository extends BaseRepository
{
	
	protected $fieldSearchable=[
         'title',
         'description'

	];

	public function getFieldsSearchable(){

		return $this->fieldSearchable;
	}

	public function model(){

		 return DoctorDepartment::class;
	}
}