@extends('layouts.app')

@section('content')
    @foreach($posts as $post)
        <div class="row">
            <div class="col-md-12">
                <h1>
                    <a href="{{route('post_path',['post'=>$post->id])}}">{{$post->title}}</a>
                    <small class="pull-right">
                        <a href="{{route('edit_post_path',['post'=>$post->id])}}" class="btn btn-info">Edit</a>
                        <form action={{route('delete_post_path',['post'=>$post->id])}} method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </small>       
                </h1>
                <p>Posted {{$post->created_at->diffForHumans()}}</p>
            </div>
        </div>
        <hr>
    @endforeach
    {{$posts->render()}}
@endsection