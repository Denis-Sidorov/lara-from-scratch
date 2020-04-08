<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use function redirect;
use function route;
use function view;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('article.index', [
            'articles' => Article::query()->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        $article = new Article($request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
                                                  ]));
        $article->save();
        return redirect(route('articles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     */
    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return Response::view('article.edit', ['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Article $article)
    {
        $article->fill($request->validate([
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
        ]));
        $article->save();

        return Response::redirectToRoute('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return Response::redirectToRoute('articles.index');
    }
}
