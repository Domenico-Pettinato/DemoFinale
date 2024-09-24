<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $article_to_check = Article::where('is_accepted', null)->orderBy('created_at', 'desc')->first();
        return view('revisor.index', compact('article_to_check'));
    }
    public function accept(Article $article){
        $article->setAccepted(true);
        session()->flash('revMessage', 'Articolo accettato con successo!');
        return redirect()->back()->with("L'annuncio $article->title è stato accettato");
    }
    public function reject(Article $article){
        $article->setAccepted(false);
        session()->flash('revMessage', 'Articolo rifiutato con successo!');
        return redirect()->back()->with("L'annuncio $article->title è stato rifiutato");
    }
}
