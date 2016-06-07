@extends('layouts.blog')

@section('title')
	All Posts
@stop

@section('content')
	{{ Form::open(array('action' => 'HomeController@doLogin', 'method' => 'put')) }}
		<div class="form-group">
		    {{ Form::label ('email', 'Email') }}
			{{ Form::text('email', Input::old('email'), array('class'=> 'form-control', 'placeholder' => 'email')) }}
		    {{$errors->first('title', '<span class="help-block">:message</span>') }}
	  	</div>
	  	<div class="form-group">
	  		{{ Form::label ('password', 'Password') }}
	  		{{ Form::password('password', null, 'class'=> 'form-control') }}
		    {{$errors->first('categories', '<span class="help-block">:message</span>') }}
	  	</div>
			{{ Form::submit('Create Post', array('class' => 'btn btn-primary'))}}
	{{ Form::close() }}

@stop