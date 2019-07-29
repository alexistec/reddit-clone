<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){

        $posts = Post::orderBy('id','desc')->paginate(10);

        return view('posts.index')->with(['posts'=>$posts]);
    }

    public function show(Post $post){

        /*$post = Post::find($postId);

        if(is_null($post)){
            abort(404);
        }*/
        return view('posts.show')->with(['post'=>$post]);
    }


    public function edit(Post $post){

        //dd($post);

        return view('posts.edit')->with(['post'=>$post]);
    }


    public function update(Post $post , Request $request){
        $this->validate($request,[
            'title'=>'required',
            'url'=>'required|url',
        ]);

        $post->update(
            $request->only('title','description','url')
        );

        return redirect()->route('post_path',['post'=>$post->id]);
    }

    public function create(){

        $post = new Post;
        return view('posts.create')->with(['post'=>$post]);
    }


    public function delete(Post $post){
        $post->delete();
        return redirect()->route('posts_path');
    }


    public function store(Request $request){

        $this->validate($request,[
            'title'=>'required',
            'url'=>'required|url',
        ]);

        $post = new Post;
        $post->title= $request->get('title');
        $post->description= $request->get('description');
        $post->url = $request->get('url');
        $post->save();
        

        return redirect()->route('posts_path');
    }
}
