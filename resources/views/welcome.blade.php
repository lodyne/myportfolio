@extends('applayout')
@section('index')
    <div class="container">
        <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        <p>{{$framework}}</p>
                        <h6>This is specific for {{$title}}</h6>
                        <h6>Laravel is comprises of:</h6>
                        <ul class="list-group">
                            @foreach ($architecture as $item)
                                <li class="list-group-item">{{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
    </div>
@endsection


