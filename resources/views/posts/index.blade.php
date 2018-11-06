@extends('layouts.app')
@section('content')

    <div class="container-fluid">

        <div class="container">
            <h1>Posts</h1>
        </div>
        @if(count($posts) > 0)
            @foreach ($posts as $post)
                <div class="container">
                    <div class="well">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/storage/cover_images/{{$post->cover_image}}" style="width:100%;"/>
                            </div>
                            <div class="col-md-8">
                                <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <p>{!!$post->body!!}</p>
                                <small>Last Updated at :{{$post->updated_at}} </small>
                                <small class="pull-right">By : {{$post->user->name}} </small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="container">
                <div class="pull-right">
                    {{$posts->links()}}
                </div>
            </div>
            @else
            <div class="container">
                <div class="well">
                    <p class="text-center">No posts found</p>
                </div>
        @endif
    </div>

@endsection