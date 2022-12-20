@extends('posts.layout')

@section('title')
    Create
@endsection

@section('content')
<div class="container">
    <h1> Hello Create</h1>

    <div class="mb-3">
        <form action="{{ route('posts.store') }}" method="POST"> 
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input type="text" class="form-control" id="body" name="body">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection

