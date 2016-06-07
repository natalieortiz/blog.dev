@extends('layouts.blog')

@section('title')
	All Posts
@stop

@section('content')
<main class="container-fluid">
	@if ($posts->getCurrentPage() == 1)
		<div class="row">
			<div class="header col-xs-12 col-md-10 col-md-offset-1">
				<div class="row">
					<div class="col-md-9 col-sm-12 col-xs-12 path">

						<h1>Chasing Change</h1>

					</div>
					<div class="col-md-3 col-sm-12 col-xs-12 about">
						<p>My name is Natalie.  I'm a nerd who is also obsessed with Notre Dame, travel, football, and dogs. I'm always on the lookout for new adventures as well.  This is my blog about my attempt at stepping outside my comfort zone. </p>
					</div>
				</div>
			</div>
		</div>
	@endif

	@foreach ($posts as $post)
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="post">
				<h4><a href="{{{ action('PostsController@show', $post->id) }}}">{{{$post->title}}}</a></h4>
				<p>{{$post->content}}</p>
				<h4>Categories: {{{$post->categories}}}</h4>
				<p>Posted on: {{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
			</div>
		</div>
	</div>
	@endforeach
	{{ $posts->links() }}
</main>
@stop


