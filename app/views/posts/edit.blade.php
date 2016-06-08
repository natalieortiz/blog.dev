@extends('layouts.blog')

@section('title')
	Edit Post
@stop

@section('content')
<!-- Large modal -->

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Are you sure?</h4>
      </div>
      <div class="modal-body">
        <p>Delete this post?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        {{Form::open (array('action' => array( 'PostsController@destroy', $post->id), 'method' => 'DELETE' )) }}
        	<input type="submit" class="btn btn-primary" value="Delete Post">
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>
<main class="container-fluid">
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="create_area">
		<h1>Edit Post</h1>
		{{ Form::model($post, array('action' => array('PostsController@update', $post->id),'files' => true, 'method' => 'PUT')) }}
			<div class="form-group">
			    {{ Form::label ('title', 'Title') }}
				{{ Form::text('title', null, array('class'=> 'form-control')) }}
			    {{$errors->first('title', '<span class="help-block">:message</span>') }}
		  	</div>
		  	<div class="form-group">
			    {{ Form::label ('content', 'Content') }}

			    {{ Form::textarea ('content', null, array('class' => 'form-control', 'rows'=>'3')) }}
			    
			    {{$errors->first('content', '<span class="help-block">:message</span>') }}
		  	</div>
		  	<div class="form-group">
		  		{{ Form::label ('categories', 'Categories') }}
		  		{{ Form::text('categories', null, array('class'=> 'form-control')) }}
			    {{$errors->first('categories', '<span class="help-block">:message</span>') }}
		  	</div>
		  	<div class="form-group">
		  		{{ Form::label ('img', 'Upload Image') }}
		  		{{ Form::file('img') }}
		  	</div>
			{{ Form::submit('Update Post', array('class' => 'btn btn-primary'))}}
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Delete Post</button>
		{{ Form::close() }}
		</div>
	</div>
</div>
</main>
@stop

