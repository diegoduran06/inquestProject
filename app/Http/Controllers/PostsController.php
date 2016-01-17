<?php

namespace Inquestpro\Http\Controllers;

use Illuminate\Http\Request;

use Inquestpro\Http\Requests;
use Inquestpro\Http\Controllers\Controller;
use Inquestpro\Post;
class PostsController extends Controller
{
    public function show($id){
    	$post = Post::findOrFail($id);
    	return view('post',['post'=>$post]);
    }
}
