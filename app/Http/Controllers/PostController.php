<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        // dd($request->all());
        $request->validate([
            'titulo' => 'required',
            'texto' => 'required',
        ]);
        $post = new Post();
        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $imagem_local = $imagem->store('imagens', 'public');
            $post->imagem = $imagem_local;
        } else {
            $post->imagem = '';
        }
        $imagem = $request->file('imagem');
        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $post->criado_em = $request->criado_em;

        $post->save();
        return redirect('/home')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'titulo' => 'required',
            'texto' => 'required',
        ]);

        if ($request->file('imagem')) {
            Storage::disk('public')->delete($post->imagem);
        }
        $imagem= $request->file('imagem');
        $imagem_local = $imagem->store('imagens', 'public');
        $post->imagem = $imagem_local;
        $post->titulo = $request->titulo;
        $post->texto = $request->texto;
        $post->criado_em = $request->criado_em;

        $post->save();
        return redirect('/home')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::disk('public')->delete($post->imagem);
        $post->delete();
        return redirect('/home')->with('success', 'Post deleted successfully!');
    }
}
