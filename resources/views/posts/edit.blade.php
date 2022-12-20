@extends('posts.layout')

@section('title')
    Edit
@endsection

@section('content')
<div class="container">
    <h1> Hello Edit</h1>

    <div class="mb-3">
        <form action="{{ route('posts.update',$post->id) }}" method="POST"> 
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input type="text" class="form-control" id="body" name="body" value="{{ $post->body }}">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection

