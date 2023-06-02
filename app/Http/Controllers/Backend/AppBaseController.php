<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Utils\ResponseUtil;

class AppBaseController extends Controller
{
     public  function sendResponse($result,$message){
     	return response()->json(ResponseUtil::makeResponse($message,$result));
     }

     public function sendError($error, $code = 404){

     	return response()->json(ResponseUtil::makeError($error),$code);
     }

     public function sendSuccess($message)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
        ], 200);
    }
}
