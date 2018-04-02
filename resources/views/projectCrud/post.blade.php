@extends('master.app')



@section('content')
<h1>All posts <br>
  <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm">Create post</a></h1>
  <div class="row">
    <div class="col-lg-10">
          <table class="table table-bordered">
            <tr>
              <th>id</th>
              <th>title</th>
              <th>body</th>
            </tr>
            @foreach($posts as $post)
            <tr>
              <td>{{ $post->post_id }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->body }}</td>
              <td><a href="{{ route('posts.edit',['id' =>$post->post_id]) }}" class="btn btn-success btn-xs">Edit</a></td>
              <td>
                <form action="{{ route('posts.destroy',$post->post_id) }}" method="post">
                  {{ csrf_field() }}
                  <input name="_method" type="hidden" value="DELETE">
                  <button class="btn btn-danger btn-xs">delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          
          </table>
    </div>
  </div>

@endsection






