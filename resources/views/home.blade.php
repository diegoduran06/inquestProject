@extends('layouts.default')
@section('content')
    <h1>Estos son nuestros Posts</h1>
    <hr>
    <ul class="list-unstyled">
    @foreach($posts as $post)
    	<li>
    		<p class="lead">
	    		<a href="{{route('post_show_path',$post->id)}}">
					{{$post->title}}
				</a>
    		</p>
    		autor: {{$post->author->name}}
    		<br>
    		creado: {{$post->created_at}}
    	</li>
    	<hr>
    @endforeach
    </ul>
@stop