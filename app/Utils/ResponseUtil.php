<?php
namespace app\Utils;

class ResponseUtil
{
  /**
   * @param $data
   * @param $message
   * @return return


  */

   public static function makeResponse($message,$data):array
   {

   	  return [
               'success'=>true,
               'data'=>$data,
               'message'=>$message,
   	  ];
   } 

    /**
   * @param $data
   * @param $message
   * @return array


  */

   public  static function makeError($message,array $data=[]):array
   {

   	$res [
         'success' => false,
            'message' => $message,

   	];

   	if(!empty($data)){
   		$res['data']=$data;
   	}

   return $res;
   }
}

?>
