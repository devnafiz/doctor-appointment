<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\CategoryRepository;
use App\Models\Category;
use App\Http\Requests\CategoryCreateRequest;

class CategoryController extends AppBaseController
{
    private $CategoryRepository;

     public function __construct(CategoryRepository $catRepo)
     {
       $this->CategoryRepository=$catRepo;

     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   

    public function index()
    {
        //dd('hi');
        //$data = Category::STATUS_ARR;
        $category = $this->CategoryRepository->all();

        //dd($category);
        $data=[];
        foreach ($category as  $value) {
           $data[]=$value->prepareDocument();

        }
        //dd($data);

      

       
        //return $data;
         return $this->sendResponse($data, 'Bills Retrieved Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryCreateRequest $request)
    {
       $input = $request->all();
       $input['is_active']=!isset($input['is_active']) ? false : true; 
       $this->CategoryRepository->create($input);
        return $this->sendSuccess(__('messages.medicine.medicine_category').' '.__('messages.common.saved_successfully'));



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
}
