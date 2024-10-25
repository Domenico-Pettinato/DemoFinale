<x-layout>
    <div class="container d-flex justify-content-center align-items-center fst-italic" style="min-height: 100vh;">
        <div class="row w-100">
            <!-- Colonna di sinistra con il titolo e il carosello -->
            <div class="col-12 col-md-6 mb-4 mx-auto">
                <div class="p-3 text-center">
                    <h1 class="d-flex justify-content-center text-center mb-5">{{ $article->title }}</h1>
                    <!-- Carousel -->
                    @if ($article->images->count() > 0)
                    <div id="carouselExampleIndicators" class="carousel slide mb-3 ">
                        <div class="carousel-indicators ">
                            @foreach ($article->images as $key => $image)
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}"
                                class="@if($key == 0) active @endif" aria-current="@if($key == 0) true @endif"
                                aria-label="Slide {{ $key + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($article->images as $key => $image)
                            <div class="carousel-item @if($key == 0) active @endif">
                                <img src="{{ Storage::url($image->path) }}" class="d-block w-100 carouselImgCustom"
                                    alt="Immagine {{ $key + 1 }} dell'articolo">
                            </div>
                            @endforeach
                        </div>
                        <!-- Controlli del carosello -->
                        @if ($article->images->count() > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        @endif
                    </div>
                    @else
                    <!-- Placeholder se non ci sono immagini -->
                    <img class="cardImageCustom rounded-5" src="https://picsum.photos/{{ 450 + $article->id }}" alt="Immagine placeholder">
                    @endif
                    <!-- Sezione acquisto articolo -->
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center p-3 rounded-5 bg-light mt-5" style="max-width: 450px; margin: 0 auto;">
                        <h5 class="mb-0 text-center text-md-start">{{ __('ui.buy') }}</h5>
                        <span class="text-success fw-bold my-2 my-md-0">€{{ $article->price }}</span>
                        <button type="button" class="btn btn-outline-success btn-sm rounded-5 bi bi-cart-plus"></button>
                    </div>
                </div>
            </div>

            <!-- Colonna di destra con descrizione categoria data e prezzo -->
            <div class="col-md-6 col-12 mt-4 d-flex flex-column justify-content-between align-items-top">
                <div class="custom-margin">
                    <h1>{{__('ui.descrizione')}}:</h1>
                    <p class="h5">{{ $article->description }}</p>
                    <!-- <img class="cardImageCustom rounded-5 mt-5" src="https://picsum.photos/{{ 150 + $article->id }}" alt="Immagine placeholder"> -->
                </div>

                <div class=" text-center mb-3">
                    <p class="h5 showElementCustom"> {{ __('ui.nomeCategoria') }}: {{$article->category->name }}</p>
                    <p class="h5 showElementCustom">{{ __('ui.adcreatedon') }} {{ $article->created_at->format('d/m/Y') }} da {{ $article->user->name }}</p>
                    <p class="h5 showElementCustom">{{ __('ui.Price') }}: €{{ $article->price }}</p>
                </div>

            </div>

            <div class="container mt-5">
                <a href="{{ route('shop') }}">
                    <button type="button" class="btn btn-outline-primary rounded-pill">Back</button>
                </a>
            </div>
        </div>
    </div>
</x-layout>