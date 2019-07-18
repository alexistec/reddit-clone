@extends('layouts.app')

@section('content')
    
    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-12">
                <h1><a href="{{route('post_path',['post'=>$post->id])}}">{{$post->title}}</a></h1>
                <p>Posted {{$post->created_at->diffForHumans()}}</p>
            </div>
        </div>
        <hr>
    @endforeach
@endsection