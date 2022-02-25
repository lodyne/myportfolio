@extends('applayout')
@section('index')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method'=> 'post']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title')}}
            {{ Form::text('title', '',['class' => 'form-control','placeholder'=>'Title'])}}
        </div>

        <div class="form-group">
            {{ Form::label('body', 'Body')}}
            {{ Form::textarea('body', '',['id' => 'article-ckeditor','class' => 'form-control','placeholder'=>'Body Text'])}}
        </div>
        {!! Form::submit('Submit',['class'=> 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection
