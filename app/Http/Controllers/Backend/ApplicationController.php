<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
     public function __invoke(){

     	return view('Backend.layouts.app');
     }
}
