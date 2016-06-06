@extends('layouts.blog')

@section('title')
	Create a Post
@stop

@section('content')
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="create_area">
		<h1>Create a Blog Post</h1>
		{{ Form::open(array('action' => 'PostsController@store')) }}
			<div class="form-group">
			    {{ Form::label ('title', 'Title') }}
				{{ Form::text('title', Input::old('title'), array('class'=> 'form-control', 'placeholder' => 'Title')) }}
			    {{$errors->first('title', '<span class="help-block">:message</span>') }}
		  	</div>
		  	<div class="form-group">
			    {{ Form::label ('content', 'Content') }}

			    {{ Form::textarea ('content', Input::old('content'), array('class' => 'form-control', 'rows'=>'3', 'placeholder' => 'Content')) }}
			    
			    {{$errors->first('content', '<span class="help-block">:message</span>') }}
		  	</div>
		  	<div class="form-group">
		  		{{ Form::label ('categories', 'Categories') }}
		  		{{ Form::text('categories', Input::old('categories'), array('class'=> 'form-control', 'placeholder' => 'Categories')) }}
			    {{$errors->first('categories', '<span class="help-block">:message</span>') }}
		  	</div>
			{{ Form::submit('Create Post', array('class' => 'btn btn-primary'))}}
		{{ Form::close() }}
		</div>
	</div>
</div>
@stop

