<x-layout>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="row w-100">
            <!-- Colonna di sinistra con il titolo e il carosello -->
            <div class="col-md-6 col-12 mb-4">
                <div class="p-3 ">
                    <!-- Titolo dell'articolo -->
                    <h1 class="mb-4 text-center ">{{$article->title}}</h1>
                    <!-- Carousel -->
                    @if ($article->images->count() > 0)
                    <div id="carouselExampleIndicators" class="carousel slide mb-3">
                        <div class="carousel-indicators">
                            @foreach ($article->images as $key => $image)
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" class="@if($key == 0) active @endif" aria-current="@if($key == 0) true @endif" aria-label="Slide {{ $key + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($article->images as $key => $image)
                            <div class="carousel-item @if($key == 0) active @endif">
                                <img src="{{ Storage::url($image->path) }}" class="d-block w-100 carouselImgCustom" alt="Immagine {{ $key + 1 }} dell'articolo">
                            </div>
                            @endforeach
                        </div>
                        @if ($article->images->count() > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        @endif
                    </div>
                    @endif
                    <!-- Sezione acquisto articolo -->
                    <div class="d-flex justify-content-between align-items-center p-3 border rounded bg-light mb-3">
                        <h5 class="mb-0">Acquista Articolo</h5>
                        <span class="text-success fw-bold">€{{$article->price}}</span>
                        <button type="button" class="btn btn-primary">Acquista</button>
                    </div>
                </div>
            </div>

            <!-- Colonna di destra con descrizione e dettagli -->
            <div class="col-md-6 col-12 mb-4">
                <div class="p-2 mt-3">
                    <!-- Descrizione dell'articolo -->
                    <h5 class="">Descrizione:</h5>
                    <p>{{ $article->description }}</p>
                </div>

                <div class="p-2 custom-margin">
                    <!-- Categoria dell'articolo -->
                    <h5 class="">Categoria: {{$article->category->name}}</h5>
                    <!-- Data di creazione e Creatore dell'articolo-->
                    <h5 class="">Creato il: {{$article->created_at->format('d/m/Y')}} da: {{$article->user->name}}</h5>
                </div>

            </div>

            <!-- Pulsante di ritorno -->
            <div class="container mt-3 mb-3">
                <a href="{{ route('article.index', ['article' => $article]) }}">
                    <button type="button" class="btn btn-outline-primary rounded-pill">Indietro</button>
                </a>
            </div>
        </div>
    </div>
</x-layout>