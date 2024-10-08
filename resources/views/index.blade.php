<x-layout>
    <div class="container vh-100 mt-5"> 
        <div class="row g-4">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4">
                <div class="card h-100">
                    <!-- Ciclo per le immagini dell'articolo -->
                    @if($article->images->count() > 0)
                    @foreach ($article->images as $key => $image)
                    <img src="{{ $image->getUrl(300, 300) }}" class="card-img-top img-fluid rounded shadow" alt="Immagine {{$key + 1}} dell'articolo {{ $article->title }}">
                    @endforeach
                    @endif

                    <div class="card-body">
                        <x-card :article="$article" />
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
