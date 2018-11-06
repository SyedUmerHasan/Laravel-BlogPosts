@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

                    <b><h2>Welcome <b>{{ Auth::user()->name }}</b> to your Blog Post Dashboard!</h2></b>
                    <br/>
            <a href="/posts/create" class="btn btn-primary">Create Posts</a>
        <div><br></div>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

  
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container-fluid">
                        @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach ($posts as $post)
                            {{--  <div class="well">
                                <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
                                <p>{!!$post->body!!}</p>
                                <small>Last Updated at :{{$post->updated_at}} </small>
                            </div>  --}}
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                <td>
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}            

                                </td>
                            </tr>
                            
                            @endforeach
                        </table>
                            @else
                                <p>No posts found</p>

                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
