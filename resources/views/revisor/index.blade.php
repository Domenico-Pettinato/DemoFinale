<x-layout>
    <h1 class="text-center">In questa pagina troverai un elenco di tutti gli articoli da revisionare</h1>
    <div class="container pageWrapper">
        @if (session()->has('revMessage'))
            <div class="alert alert-secondary">
                {{session('revMessage')}}
            </div>
        @endif
        <div class="row justify-content-center">
            @if ($article_to_check)
                <x-revisorcard :article="$article_to_check"/>
                <div class="d-flex justify-content-center">
                    <form action="{{route('accept', ['article'=>$article_to_check])}}" method="POST" class="mt-4 mb-5 me-5">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success btnRevisorCustom">Accetta</button>
                    </form>
                    <form action="{{route('reject', ['article'=>$article_to_check])}}" method="POST" class="mt-4 mb-5">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-danger btnRevisorCustom">Rifiuta</button>
                    </form>
                </div>
            @else
                <div class="col-12 mt-5">
                    <h2 class="text-center">Non hai nessun articolo da revisionare</h2>
                </div>
            @endif
        </div>
    </div>
</x-layout>


