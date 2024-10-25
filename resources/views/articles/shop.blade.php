<x-layout>
<div class="d-flex flex-column min-vh-100">
    @auth
    <!-- Utente autenticato: mostra tutti gli articoli -->
    <div class="container">
        <div class="row v-100"> <!-- Assicurati che 'vh-100' sia corretto -->
            @foreach ($articles as $article)
            <x-card :article="$article" />
            @endforeach
        </div>
    </div>
    <!-- Paginazione -->
    <div class="d-flex justify-content-center mt-auto">
        {{ $articles->links('pagination::bootstrap-4') }} <!-- Usa lo stile di Bootstrap 4 -->
    </div>

    @else
    <!-- Utente non autenticato: mostra solo 6 articoli -->
    <div class="container">
        <div class="row v-100">
            @foreach ($articles->take(6) as $article)
            <x-card :article="$article" />
            @endforeach
        </div>
    </div>
    @endauth
</div>
</x-layout>