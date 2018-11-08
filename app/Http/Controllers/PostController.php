<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $posts = \Auth::user()->posts()->orderBy('updated_at', 'desc')->get();
        $posts = Post::all()->sortByDesc('updated_at');

      return view ('welcome', compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new \App\Post;
        $post->title = $request->input('title');
        $post->user_id = \Auth::id();
        $post->name = \Auth::user()->name;
        $post->text = $request->input('text');
        $post->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($post->id);
        return redirect('welcome');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = \App\Post::find($id);
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = \App\Post::find($id);
        $post->title = $request->input('title');
        // $post->user_id = \Auth::id();
        // $post->name = \Auth::user()->name;
        $post->text = $request->input('text');
        $post->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = \App\Post::find($id);
        $post->delete();

        return redirect('/');
    }

    public function confirmDelete($id)
{
    $post = \App\Post::find($id);
    return view('confirmDelete', compact('post'));
}
}
