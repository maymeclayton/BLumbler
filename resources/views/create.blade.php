@extends('layouts.app')

@section('content')

<h3 class="mt-5"> Creation Station </h3>

<form class="mt-3">
  <div class="form-group">
    <label for="">title your post</label>
    <textarea class="form-control" id="posttext" rows="1"></textarea>
  </div>
  <div class="form-group">
    <label for="">create your post:</label>
    <textarea class="form-control" id="posttext" rows="5"></textarea>
  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
</form>


@endsection
