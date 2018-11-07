@extends('layouts.app')

@section('content')

<h3 class="mt-2 text-white">Edit post</h3>

<form class="mt-3" method="POST" action="/posts/{{$post->id }}">
  @method('PUT')
  @csrf
  <div class="form-group text-white">
    <label for="">title</label>
    <textarea class="form-control" id="text" name='title' rows="1" value=" {{ $post->title }}" >{{ $post->title }}</textarea>
  </div>
  <div class="form-group text-white">
    <label for="">post</label>
    <textarea class="form-control" id="text" name='text' rows="5" value="{{ $post->text }}">{{ $post->text }}</textarea>
  </div>
  <input type="hidden" name="id" value="{{ $post->id }}">
  <input class="btn btn-primary" type="submit" value="Submit">
</form>


@endsection
