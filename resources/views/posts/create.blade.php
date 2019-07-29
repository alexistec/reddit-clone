@extends('layouts.app')

@section('content')
    <h2>Create post</h2>
    @include('posts._forms',['post'=>$post])
@endsection