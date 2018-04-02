@extends('master.app')


@section('content')

<div class="card">
	<div class="card-header text-center bg-primary text-white">
    <h2>Create Post</h2>
  	</div>
	<div class="card-body">
		<form action="{{ route('posts.store') }}" method="post">
			{{ csrf_field() }}
				 <div class="form-group">
				 	<label for="title">Title:</label>
				 	<input type="text" name="title" class="form-control">
				 </div>

				  <div class="form-group">
				  	<label for="body">Body</label>
				  	<textarea name="body" cols="30" rows="10" class="form-control"></textarea>
				 </div>
				 	<div class="text-center">
				 		<button class="btn btn-primary btn-ms">Store</button>	
				 	</div>
				 
		</form>
	</div>
</div>






@endsection