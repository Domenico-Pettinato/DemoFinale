<x-layout>
    <div class="container-fluid vh-100">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-2">Risultato della ricerca "<span class="fst-italic">{{ $query }}</span>"</h1>
            </div>
        </div>
                @forelse($articles as $article)
                <div class="col-12 col-md-6 col-lg--6">
                    <x-card :article="$article" />
                </div>
                @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Nessun articolo corrisponde alla tua ricerca!
                    </h3>
                </div>
                @endforelse
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <div>
                {{ $articles->links() }}
            </div>
        </div>
</x-layout>