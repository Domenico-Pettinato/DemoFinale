<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateArticle extends Component
{
    #[Validate()]
    public $title;
    #[Validate()]
    public $price;
    #[Validate()]
    public $description;
    #[Validate()]
    public $category_id;

    // validation
    public function rules(){
        return [
            'title'=> 'required',
            'price'=> 'required',
            'description'=> 'required|min:10|max:1000',
            'category_id'=> 'required',
        ];
    }
    // messages
    protected $messages = [
        'title.required' => 'Il titolo è obbligatorio.',
        'price.required' => 'Il prezzo è obbligatorio.',
        'description.required' => 'La descrizione è obbligatoria.',
        'description.min' => 'La descrizione deve avere almeno 10 caratteri.',
        'description.max' => 'La descrizione deve avere massimo 1000 caratteri.',
        'category_id.required' => 'La categoria è obbligatoria.'
    ];
    // store articles
    public function store(){
        $this->validate();
        
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
