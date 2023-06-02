<?php
  namespace App\Repositories;

  use App\Models\Category;


  class CategoryRepository extends BaseRepository
  {



  	protected  $fieldSearchable =[

       'name'
  	];


    public function getFieldsSearchable(){

    	$this->fieldSearchable;
    } 

    public function model(){

    	return Category::class;
    }



  }




?>