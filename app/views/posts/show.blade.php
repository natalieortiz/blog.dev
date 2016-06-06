@extends('layouts.blog')

@section('title')
	{{{$post->title}}}
@stop


@section('content')
<main class="container-fluid">
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="post">
			<h4>Title: {{{$post->title}}}</h4>
			<h4>Content: </h4><p>{{{$post->content}}}</p>
			<h4>Categories: {{{$post->categories}}}</h4>
			<a href="{{{ action('PostsController@edit', $post->id) }}}" class="btn btn-primary">Edit Post</a>
		</div>	
	</div>
</div>
</main>
@stop