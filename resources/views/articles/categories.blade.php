<x-layout>
    <h1>Articoli nella categoria: {{ $category->name }}</h1>
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="cardWrapper">
                        <img class="cardImageCustom" src="https://picsum.photos/{{400+$article->id}}" alt="">
                        <h2 class="cardTextCustom">{{$article->title}}</h2>
                        <h5 class="cardTextCustom">{{$article->category->name}}</h5>
                        <h4 class="cardTextCustom">€{{$article->price}}</h4>
                        <p class="cardTextCustom cardDescriptionCustom">{{$article->description}}</p>
                        <p class="cardTextCustom">Articolo di {{$article->user->name}}</p>
                        <a class="" href="{{route('articles.show', ['article'=>$article->id])}}">
                        <button type="button" class="btn btn-secondary btnShowCustom">Mostra articolo</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>