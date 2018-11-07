@extends('layouts.app')

@section('content')

    @foreach ($posts as $post)
    <div>
      <!-- <div class="row">
        <div class="col-6"> -->
          <div class="card mb-3 col-8" style="">
            <div class="card-body">
              <h5 class="card-title"> {{ $post->title }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Posted by: {{ $post -> name }}</h6>
              <p class="card-text">{{ $post ->text }}</p>
              <a class="btn btn-warning" href="/posts/ {{$post->id}}/edit" role="button">Edit</a>
            </div>
          </div>
        <!-- </div>
      </div> -->
    </div>
    @endforeach

@endsection
