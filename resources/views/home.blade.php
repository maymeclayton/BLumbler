@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div> <a href="/posts/create">Create a new post</a></div>
                        <div> <a href="/">Edit an existing post</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
