@extends('posts.layout')

@section('title')
    Show
@endsection

@section('content')
<div class="container">
    <h1> Hello index</h1>

    <table class="table">

        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Action</th>
          </tr>

        </thead>
        <tbody>

            <tr>
              <th scope="row">{{ $post->id }}</th>
              <td>{{ $post->title }}</td>
              <td>{{ $post->body }}</td>
              <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="Post">
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>

        </tbody>
      </table>
</div>
@endsection