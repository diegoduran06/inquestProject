<?php

namespace Inquestpro\Http\Controllers;

use Illuminate\Http\Request;

use Inquestpro\Http\Requests;
use Inquestpro\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
    *
    * @return Response
    */
    public function index(){
    	return view('home');
    }
}
