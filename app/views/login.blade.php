@extends('layouts.blog')

@section('title')
	All Posts
@stop

@section('content')
<main class="container-fluid"> 
	<div class="row">
		<div class="col-md-4 col-md-offset-4"> 
		{{ Form::open(array('action' => 'HomeController@doLogin', 'method' => 'post')) }}
			<div class="form-group">
			    {{ Form::label ('email', 'Email') }}
				{{ Form::text('email', Input::old('email'), array('class'=> 'form-control', 'placeholder' => 'email')) }}
			    {{$errors->first('email', '<span class="help-block">:message</span>') }}
		  	</div>
		  	<div class="form-group">
		  		{{ Form::label ('password', 'Password') }}
		  		{{ Form::password('password', array('class'=> 'form-control')) }}
			    {{$errors->first('password', '<span class="help-block">:message</span>') }}
		  	</div>
				{{ Form::submit('Login', array('class' => 'btn btn-primary'))}}
		{{ Form::close() }}
		</div>
	</div>
</main>
@stop