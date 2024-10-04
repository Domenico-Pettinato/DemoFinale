<x-layout>
    <div class="container">
        <div class="row">
             <!-- @foreach ($articles as $article)
                <x-card :article="$article"/> 
            @endforeach -->
             @foreach ($article->images as $key => $image)
            <div class="col-6 col-md-4 mb-4 text-center">
                <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded shadow" alt="Immagine {{$key + 1 }} dell'articolo {{ $article_to_chack->title }}">
            </div>
            @endforeach
        </div>
    </div>
</x-layout>