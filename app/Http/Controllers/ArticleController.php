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
        // Con utente autenticato mostra tutti gli articoli dal pu recente
        // if (Auth::check()) {
        //     $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get(); 
        // } else {
        //     // Con utente non autenticato, mostra solo 6 articoli dal pi+ recente
        //     $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get(); 
        // }
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get(); 

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
}
