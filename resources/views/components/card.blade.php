<div class="col-12 col-md-6 col-lg-4">
  <div class="cardWrapper">
    <img class="cardImageCustom" src="{{$article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : 'https://picsum.photos/' . 300 +$article->id}}" alt="">
    <h2 class="cardTextCustom">{{$article->title}}</h2>
    <h5 class="cardTextCustom">{{$article->category->name}}</h5>
    <h4 class="cardTextCustom">€{{$article->price}}</h4>
    <p class="cardTextCustom cardDescriptionCustom">{{$article->description}}</p>
    <p class="cardTextCustom">Articolo di {{$article->user->name}}</p>
    <a class="" href="{{route('articles.show', ['article'=>$article->id])}}">
      <button type="button" class="btn btn-secondary btnShowCustom">Mostra articolo</button>
    </a>
  </div>
</div>