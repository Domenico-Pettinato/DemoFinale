<x-layout>
    <livewire:article-edit-form :article="$article"/>
    <div class="container mb-5">
                <a href="{{ route('personalArea') }}">
                    <button type="button" class="btn btn-outline-primary rounded-pill">Back</button>
                </a>
            </div>
</x-layout>