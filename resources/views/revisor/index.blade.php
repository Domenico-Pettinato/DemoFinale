<x-layout>
    <h1 class="text-center">Benvenuto nella tua area riservata</h1>
    <div class="container">
        @if (session()->has('revMessage'))
            <div class="alert alert-secondary">
                {{session('revMessage')}}
            </div>
        @endif
        <div class="row justify-content-center">
            @if ($article_to_check)
                <x-card :article="$article_to_check"/> 
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
                <div class="col-12">
                    <h2 class="text-center">Nessun articolo da revisionare</h2>
                </div>
            @endif
        </div>
    </div>
</x-layout>


