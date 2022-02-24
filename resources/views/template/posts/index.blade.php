@extends('applayout')

    @section('index')
    <div class="container">
        <h1>Posts</h1>
        @if (count($posts) > 0)
            <div class="row">
                @foreach ($posts as $post)

                    <div class="col-lg-4">
                        <div class="card  text-white bg-secondary mb-3" style="width: 18rem;">
                            <img class="card-img-top" src="..." alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post -> title}}</a></h5>
                                <p class="card-text">{{$post -> body}}</</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{$posts->links()}}
            </div>
        @else
            <p>No Posts Available</p>
        @endif
    </div>
    @endsection


