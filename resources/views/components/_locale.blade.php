<form class ="d-inline" action ="{{route('setLocale', $lang)}}" method="POST">
    @csrf
    <button type ="submit" class="btn">
        <img src="{{asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="32" height="32" />
    </button>


{{-- ICONE CLICCABILI --}}
    {{-- <div class="d-flex justify-content-center mt-3">
        <a href="/change-language/en" class="mx-2">
            <img src="{{ asset('images/en-flag.png') }}" alt="English" width="30" height="20">
        </a>
        <a href="/change-language/it" class="mx-2">
            <img src="{{ asset('images/it-flag.png') }}" alt="Italian" width="30" height="20">
        </a>
        <a href="/change-language/fr" class="mx-2">
            <img src="{{ asset('images/fr-flag.png') }}" alt="French" width="30" height="20">
        </a> --}}

</form>