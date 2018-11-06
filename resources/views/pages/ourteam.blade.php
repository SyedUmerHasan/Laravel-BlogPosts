@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{$data['title']}}</h1>
        <p>{{$data['description']}}</p>
        @if(count($data['team']) > 0)
            @foreach($data['team'] as $members)
                <ul class="list-group">
                    <li class="list-group-item">{{$members}}</li>
                </ul>
            @endforeach
        @endif
    </div>
@endsection