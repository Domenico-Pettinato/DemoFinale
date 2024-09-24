<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ordina dal più recente massimo 6 articoli
        $articles = Article::orderBy('created_at', 'desc')->take(6)->get();
        return view('index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function searchArticles(Request $request)
{
    // Ottieni la query dalla richiesta
    $query = $request->input('query');
    
    // Esegui la ricerca negli articoli e filtra solo quelli accettati
    $articles = Article::search($query)
                ->where('is_accepted', true)
                ->paginate(10);
    
    // Ritorna la vista 'article.searched' con gli articoli trovati e la query
    return view('article.searched', [
        'articles' => $articles,
        'query' => $query,
    ]);
}


}
