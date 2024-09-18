<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateArticle extends Component
{
    public $title;
    public $price;
    public $description;
    public $category_id;

    // store articles
    public function store(){
        Article::create([
            'title'=>$this->title,
            'price'=>$this->price,
            'description'=>$this->description,
            'category_id'=>$this->category_id,
            'user_id'=>Auth::user()->id
        ]);
        session()->flash('success', 'Articolo creato con successo!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
