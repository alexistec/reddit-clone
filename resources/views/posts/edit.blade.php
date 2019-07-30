@extends('layouts.app')

@section('content')
    <h2>Editang post</h2>  
    @include('posts._forms',['post'=>$post])
@endsection