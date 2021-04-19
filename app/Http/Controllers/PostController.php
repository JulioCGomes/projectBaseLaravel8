<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Index dos posts.
     *
     * @return void
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Exibindo a view que irá criar o post.
     *
     * @return void
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Criando um novo post
     *
     * @return void
     */
    public function store(StoreUpdatePostRequest $request)
    {
        return Post::create($request->all());
    }

    /**
     * Exibindo os detalhes do post
     *
     * @return void
     */
    public function show(int $id)
    {
        /*
        * Outra maneira de ser fazer. 
        *
        * Post::where('id', $id)->first();
        */

        if (!$post = Post::find($id)) {
            return redirect()->route('post.index');
        }

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Deletando o post
     *
     * @return void
     */
    public function destroy(int $id)
    {
        if (!$post = Post::find($id)) {
            return redirect()->route('post.index');
        }

        $post->delete();

        return redirect()
            ->route('post.index')
            ->with('message', 'Post deletado com sucesso.');
    }
}
