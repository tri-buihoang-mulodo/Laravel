<?php

namespace App\Http\Controllers;


use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    // lesson 19
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    // public function index()
    // {
    // 	return view ('posts.index');
    // }

    // lesson 13: Rendering Posts
    public function index()
    {
        // $posts = Post::orderby('created_at','asc')->get();

        // lesson 20:
        $posts = Post::latest()
            ->filter(request(['month','year']))
            ->get();

        // Temporary
        $archives = Post::selectRaw('year(created_at) year,monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();  

        return view ('posts.index', compact('posts','archives'));
    }

    public function show($id)
    {
        $post = Post::find($id);
    	return view ('posts.show',compact('post'));
    }

    public function create()
    {
    	return view ('posts.create');
    }

    public function store()
    {
        // dd(request()->all());
        // Create a new post using the request data
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');

        // Save it to the database
        // $post->save();

        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body')
        // ]);

        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required|min:10'
        ]);
        // Post::create(request(['title','body']));

        
        
        auth()->user()->publish(
            new Post(request(['title','body']))
        );

        

        // And then redirect to the home page.
        return redirect('/');
    }

    
}
