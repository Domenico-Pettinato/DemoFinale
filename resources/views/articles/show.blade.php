<x-layout>
    <div class="container d-flex justify-content-center align-items-center fst-italic" style="min-height: 100vh;">
        <div class="row w-100">
            <!-- Colonna di sinistra con il titolo e il carosello -->
            <div class="col-md-6 col-12 mb-4">
                <div class="p-3">
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

                    <div class="d-flex justify-content-between align-items-center p-3 border rounded bg-light mb-1">
                        <h5 class="mb-0">Acquista Articolo</h5>
                        <span class="text-success fw-bold">€{{$article->price}}</span>
                        <button type="button" class="btn btn-primary btn-sm">Acquista</button>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Colonna di destra con descrizione categoria data e prezzo -->
            <div class="col-md-6 col-12 mb-5 d-flex flex-column">
                <div class="custom-margin mt-3">
                    <h3>Descrizione:</h3>
                    <p class="h5">{{$article->description}}</p>
                </div>

                <div class="mt-auto">
                    <p class="h5 showElementCustom">Categoria: {{$article->category->name}}</p>
                    <p class="h5 showElementCustom">Annuncio del {{$article->created_at->format('d/m/Y')}} di {{$article->user->name}}</p>
                    <p class="h5 showElementCustom">Prezzo: €{{$article->price}}</p>
                </div>
            </div>

            <div class="container mb-5">
                <a href="{{ route('article.index', ['article' => $article]) }}">
                    <button type="button" class="btn btn-outline-primary rounded-pill">Back</button>
                </a>
            </div>
        </div>
    </div>
    <x-footer/>
</x-layout>