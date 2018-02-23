<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()

    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function edit()
    {
        return view( 'posts.edit');
    }

    public function create()

    {

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $input = $request->all();
//        Post::create($input);
//
//        return redirect()->back();

        $this->validate(request(),[
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'category' => 'required'

        ]);

        Post::create(request([
            'title' => redirect('title'),
            'body' => redirect('body'),
            'image' => redirect('image'),
            'category' => redirect('category_id'),
        ]));

        return view('posts.index');

    }

    public function delete()
    {
        return view('posts.delete');
    }
}
