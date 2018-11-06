@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="container">
            <div>
                <a href="/posts" class="btn btn-primary">Go Back</a>
            </div>
            <br>
            <div class="well container">
                <div class="col-md-4">
                    <img src="/storage/cover_images/{{$posts->cover_image}}" style="width:100%;"/>
                </div>
                <h1>{{$posts->title}}</h1>
                <p>{!!$posts->body!!}</p>
                <small>Created at: {{$posts->created_at}}</small>
                <small class="pull-right">Last Updated at: {{$posts->updated_at}} By {{$posts->user->name}}</small>
            </div>
            @if (!Auth::guest())
                @if (Auth::user()->id == $posts->user_id  )
            
                <a href="/posts/{{$posts->id}}/edit" class="btn btn-primary">Edit</a>
                {!!Form::open(['action' => ['PostsController@destroy', $posts->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}            
                @endif
            @endif
        </div>
    </div>

@endsection