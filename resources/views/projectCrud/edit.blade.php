@extends('master.app')


@section('content')

<div class="card">
	<div class="card-header text-center bg-success text-white">
    <h2>Create Post</h2>
  	</div>
	<div class="card-body">
		<form action="{{ route('posts.update',$post->post_id) }}" method="post">
			{{ csrf_field() }}
			<input name="_method" type="hidden" value="PUT">
				 <div class="form-group">
				 	<label for="title">Title:</label>
				 	<input type="text" name="title" class="form-control" value="{{ $post->title }}">
				 </div>

				  <div class="form-group">
				  	<label for="body">Body</label>
				  	<textarea name="body" cols="30" rows="10" class="form-control">{{ $post->body }}</textarea>
				 </div>
				 	<div class="text-center">
				 		<button class="btn btn-success btn-ms">Update</button>	
				 	</div>
				 
		</form>
	</div>
</div>






@endsection