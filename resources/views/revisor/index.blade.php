<x-layout>
    <div class="container pageWrapper">
        <h1 class="text-center">{{__('ui.revision')}}</h1>
        @if (session()->has('revMessage'))
        <div class="row justify-content-center mt-4">
            <div class="col-5 alert message text-center shadow rounded">
                {{session('revMessage')}}
            </div>
        </div>
        @endif

        <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST" class="mt-4 mb-5 me-5">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="youtube_link">Inserisci il link di YouTube (opzionale):</label>
                <input type="text" name="youtube_link" class="form-control" id="youtube_link" placeholder="https://www.youtube.com/watch?v=example">
            </div>
            <button type="submit" class="btn btn-success btnRevisorCustom">{{ __('ui.accept') }}</button>
        </form>



        <div class="row justify-content-center">
            @if ($article_to_check)
            <x-revisorcard :article="$article_to_check" />
            <div class="d-flex justify-content-center">
                <form action="{{route('accept', ['article'=>$article_to_check])}}" method="POST" class="mt-4 mb-5 me-5">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success btnRevisorCustom">{{__('ui.accept')}}</button>
                </form>
                <form action="{{route('reject', ['article'=>$article_to_check])}}" method="POST" class="mt-4 mb-5">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-danger btnRevisorCustom">{{__('ui.reject')}}</button>
                </form>
            </div>
            @else
            <div class="col-12 mt-5">
                <h2 class="text-center">{{__('ui.NA')}}</h2>
            </div>
            @endif
        </div>
    </div>
    @foreach ($article_to_check->images as $key => $image)
    <div class="col-12">
        <div class="card mb-3 checkBg">
            <div class="row g-0 ">
                <div class="col-md-4">
                    <img src="{{ $image->getUrl(300, 300) }}"
                        class="img-fluid rounded-start" alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                </div>
                <div class="col-md-3">
                    <div class="card-body">
                        <h5>Ratings</h5>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <div class="text-center mx-auto {{ $image->adult }}">
                                </div>
                            </div>
                            <div class="col-10">adult</div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <div class=" text-center mx-auto {{ $image->violence }}">
                                </div>
                            </div>
                            <div class="col-10">violence</div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <div class=" text-center mx-auto {{ $image->spoof }}">
                                </div>
                            </div>
                            <div class="col-10">spoof</div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <div class=" text-center mx-auto {{ $image->racy }}">
                                </div>
                            </div>
                            <div class="col-10">racy</div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <div class=" text-center mx-auto {{ $image->medical }}">
                                </div>
                            </div>
                            <div class="col-10">medical</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</x-layout>