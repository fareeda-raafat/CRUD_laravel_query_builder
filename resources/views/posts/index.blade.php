
@extends('posts.layout')

@section('title')
    Index
@endsection

@section('content')
<div class="container">
    <h1> Hello index</h1>

    <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Post </a>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
    @endif 

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
            @php
                $i = 0;
            @endphp
            @foreach ($posts as $post )
            <tr>
              <th scope="row">{{ ++$i }}</th>
              <td>{{ $post->title }}</td>
              <td>{{ $post->body }}</td>
              <td>
                <form action="{{ route('posts.destroy',$post->id) }}" method="Post">
                  <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                  <a href="{{ route('posts.show',$post->id) }}" class="btn btn-success">Show</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              </td>
            </tr>
            @endforeach

        </tbody>
      </table>

</div>
@endsection

