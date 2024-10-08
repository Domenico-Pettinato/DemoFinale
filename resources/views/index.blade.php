<x-layout>
    {{-- normale --}}
    {{-- <x-sidebar/>
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <x-card :article="$article"/> 
            @endforeach
        </div>
    </div> --}}
    {{-- carosello --}}
    <div id="carouselExample" class="carousel slide carouselCustom" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($articles as $article)
                <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                    <x-indexCardCarousel :article="$article"/>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>