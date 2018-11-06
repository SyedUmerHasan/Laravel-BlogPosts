@extends('layouts.app')
@section('content')
    <div class="container jumbotron text-center">
        <h1>Welcome to BlogPosts</h1>
        <p>This is a platform for the students to make their notes available on the internet  </p>
        <p>
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
        </p>
        <a class="btn btn-primary btn-lg" href="/posts" role="button">Visit our BlogPosts</a>
    </div>
@endsection