<?php

namespace Inquestpro\Http\Controllers;

use Illuminate\Http\Request;

use Inquestpro\Http\Requests;
use Inquestpro\Http\Controllers\Controller;
use Inquestpro\Post;

class HomeController extends Controller
{
    /**
    *
    * @return Response
    */
    public function index(){
    	$post = Post::with('author')->get();
    	return view('home',['posts' => $post]);
    }
}
