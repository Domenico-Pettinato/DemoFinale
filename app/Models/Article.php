<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use Searchable;

    public function toSearchableArray() 

{ return [
	‘id’ =>$this->id,
	‘title’ =>this->title,
	‘description’ =>$this->description,
	‘category’=>$this->category
];
}

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'price', 'description', 'category_id', 'user_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
