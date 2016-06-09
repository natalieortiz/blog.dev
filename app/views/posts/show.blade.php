@extends('layouts.blog')

@section('title')
	{{{$post->title}}}
@stop


@section('content')
<main class="container-fluid">
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="post">
			<h2>{{{$post->title}}}</h2>
			@if (!empty($post->img_path))
				<img src="{{{$post->img_path}}}">
			@endif
			<p>{{$post->content}}</p>
			<h4><strong>Categories: </strong>{{{$post->categories}}}</h4>
			<p><strong>Posted on: </strong> {{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
			<a href="{{ URL::previous() }}" class="btn btn-primary show_btn">Previous Page</a>
			@if (Auth::check()) 
			<a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-primary show_btn">Edit Post</a>
			@endif
		</div>	
	</div>
</div>
</main>
@stop