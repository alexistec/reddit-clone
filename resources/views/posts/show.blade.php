@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <p>Posted {{$post->created_at->diffForHumans()}}</p>
        </div>
    </div>
@endsection