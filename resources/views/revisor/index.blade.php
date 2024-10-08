<x-layout>
    <div class="container pageWrapper vh-100 pt-5">
        <h1 class="text-center">{{__('ui.revision')}}</h1>
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
</x-layout>