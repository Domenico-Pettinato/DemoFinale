<div class="col-12 col-md-6 mb-5">
    <div class="card h-100 cardWrapper d-flex flex-row">
        <!-- Immagine -->
        @if ($article->images->isNotEmpty())
            @php
                // Recuperiamo il percorso della prima immagine associata all'articolo
                $imageUrl = Storage::url($article->images->first()->path);
            @endphp
            <img class="card-img-left img-fluid cardImageCustom"
                style="width: 200px; height: auto;"
                src="{{ $imageUrl }}"
                alt="Immagine di {{ $article->title }}">
        @else
            <!-- Immagine predefinita -->
            <img class="card-img-left img-fluid cardImageCustom"
                style="width: 200px; height: auto;"
                src="https://picsum.photos/{{ 300 + $article->id }}"
                alt="Immagine di {{ $article->title }}">
        @endif

        <!-- Corpo della card -->
        <a class="cardAnchorDecoration" href="{{ route('articles.show', ['article' => $article->id]) }}">
            <div class="card-body d-flex flex-column justify-content-between">
                <div>
                    <!-- Titolo dell'articolo -->
                    <h2 class="card-title cardTextCustom">{{ $article->title }}</h2>

                    <!-- Categoria dell'articolo -->
                    <h5 class="card-subtitle mb-2 text-muted cardTextCustom">{{ $article->category->name }}</h5>

                    <!-- Prezzo dell'articolo -->
                    <h4 class="card-text cardTextCustom">€{{ $article->price }}</h4>

                    <!-- Descrizione dell'articolo -->
                    <p class="card-text cardDescriptionCustom text-truncate cardDescriptionCustom" style="max-height: 3.5em; overflow: hidden;">
                        {{ Str::limit($article->description, 100) }}
                    </p>
                </div>

                <!-- Nome dell'autore dell'articolo -->
                <p class="card-text cardTextCustom mb-0">{{__('ui.articleof')}} {{ $article->user->name }}</p>

                <!-- Pulsante per mostrare l'articolo -->
                <a href="{{ route('articles.show', ['article' => $article->id]) }}">
                    <button type="button" class="btn btn-secondary btnShowCustom mt-2">Mostra articolo</button>
                </a>
            </div>
        </a>
    </div>
</div>
