@extends('layouts.app')

@section('content')

<h3 class="mt-2 text-white"> Creation Station </h3>

<form class="mt-3" method="POST" action="/posts">
  @csrf
  <div class="form-group text-white">
    <label for="title">title your post</label>
    <input class="form-control" type="text" id="title" name="title" placeholder="what would you like to name your post?" rows="1"></input>
  </div>
  <div class="form-group text-white">
    <label for="">create your post:</label>
    <textarea class="form-control" id="text" rows="5" type="text" name="text" placeholder="say your peace..."></textarea>
  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
</form>


@endsection
