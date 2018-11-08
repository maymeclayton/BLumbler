@extends('layouts.app')

@section('content')

    <div>
      @foreach ($posts as $post)
      <!-- <div class="row">
        <div class="col-md-4"> -->
          <div class="card mb-3" style="">
            <div class="card-body">
              <h5 class="card-title"> {{ $post->title }}</h5>
              <h6 class="card-subtitle  mt-2 mb-3 text-muted">Posted by: {{ $post -> name }} at {{ $post ->prettyUpdate() }}</h6>
              <p class="card-text mb-4">{{ $post ->text }}</p>
              <a class="btn btn-success" href="/posts/ {{$post->id}}/edit" role="button">Edit</a>
              <a class="btn btn-warning ml-2" href="/posts/ {{$post->id}}/delete" role="button">Delete</a>
            </div>
          </div>
        <!-- </div>
      </div> -->
      @endforeach
    </div>

@endsection
