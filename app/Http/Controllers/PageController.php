<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // function filtra per categoria
    public function filterByCategory($categoryId)
    {
        // Recupera la categoria selezionata
        $category = Category::findOrFail($categoryId);

        // Recupera tutti gli articoli che appartengono a quella categoria
        $articles = $category->article; // Assumendo che tu abbia la relazione 'articles' nel modello Category

        // Ritorna una vista che mostra gli articoli filtrati
        return view('articles.categories', compact('articles', 'category'));
    }
}
