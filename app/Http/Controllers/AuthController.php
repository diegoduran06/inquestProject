<?php

namespace Inquestpro\Http\Controllers;

use Illuminate\Http\Request;

use Inquestpro\Http\Requests;
use Inquestpro\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
    	return view('auth');
    }

    public function store(Request $request){
    	$this->validate($request,[
    			'email'    => 'required|email',
    			'password' => 'required',
    		]);
    	if(!Auth::attempt($request->only(['email','password']))){
    		return redirect()->route('auth_show_path')->withErrors('No encontramos al usuario.');
    	}
    	return "Bienvenidoo a Inquestpro. Tu encuesta a la mano.";
    }
}
