@extends('applayout')
@section('index')
    <a href="/posts" class="btn btn-info">Back</a>
    <div class = "container">
        <h1>{{$post -> title}}</h1>
        <div>
            {{$post -> body}}
        </div>
    </div>
@endsection
