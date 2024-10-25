<x-layout>
    <h1 class="text-center mt-5">{{ __('ui.Articlesinthecategory') }}: {{ $category->name }}</h1>
    <div class="container">
        <div class="row vh-100">
            <!-- Verifica se la categoria ha articoli -->
            @if ($category->articles->isNotEmpty())
            <!-- Itera sugli articoli della categoria -->
            @foreach ($category->articles as $article)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="cardWrapper">
                    <img class="cardImageCustom" src="https://picsum.photos/{{ 400 + $article->id }}" alt="">
                    <h2 class="cardTextCustom">{{ $article->title }}</h2>
                    <h5 class="cardTextCustom">{{ $article->category->name }}</h5>
                    <h4 class="cardTextCustom">€{{ $article->price }}</h4>
                    <p class="cardTextCustom cardDescriptionCustom">{{ $article->description }}</p>
                    <p class="cardTextCustom">{{ __('ui.articleof') }} {{ $article->user->name }}</p>

                    <!-- Link all'articolo -->
                    <a href="{{ route('articles.show', ['article' => $article->id]) }}">
                        <button type="button" class="btn btn-secondary btnShowCustom">{{ __('ui.Showarticle') }}</button>
                    </a>
                </div>
            </div>
            @endforeach
            @else
            <!-- Se non ci sono articoli -->
            <div class="col-12 mt-5">
                <h2 class="text-center">{{ __('ui.Noarticlefound') }}</h2>
            </div>
            @endif
        </div>
    </div>
</x-layout>