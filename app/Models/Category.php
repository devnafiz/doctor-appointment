<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;
     protected $fillable=['name','is_active'];
     public $table = 'categories';

     const STATUS_ALL =2;
     const ACTIVE =1;
     const INACTIVE =0;

     const STATUS_ARR =[

          self::STATUS_ALL=>'All',
          self::ACTIVE =>'Active',
          self::INACTIVE=>'Deactive'

     ];

     protected $casts = [
        'deleted_at' => 'datetime',
        'id' => 'integer',
        'name' => 'string',
        'is_active' => 'integer',    ];

     public static $rules=[
     
       'name'=>'required|min:8',
     ];  

       public function prepareDocument(): array
    {
        return [
            'id'               => $this->id,
            'name'            => $this->name ?? 'N/A',
            'is_active' => $this->is_active ?? '0',
           
        ];
    }
 }
