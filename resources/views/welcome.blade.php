<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>blumbler</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .title{
              font-size: 60px;
            }
        </style>
    </head>
    <body class="container">
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>

        <div class="ml-2 mt-5">
            <div class="title">
                blumbler
            </div>
        </div>

    @foreach ($posts as $post)
        <div class="container">
          <div class="row">
            <div class="col-6">
              <div class="card" style="width:18rem;">
                <div class="card-body">
                  <h5 class="card-title"> {{ $post->title }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Posted by: {{ $post -> name }}</h6>
                  <p class="card-text">{{ $post ->text }}</p>
                  <p class="edit-card"><a href="/posts/ {{$post->id}}/edit">Edit</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    @endforeach
    </body>
</html>
