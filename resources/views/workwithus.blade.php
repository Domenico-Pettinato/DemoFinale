<x-layout>
    <header>
        <h1 class="h3 mb-3 fw-normal text-black">Lavora con noi</h1>
    </header>
    <section>
        <p>Siamo sempre alla ricerca di persone talentuose e appassionate. Se vuoi unirti al nostro team, compila il modulo di candidatura qui sotto o inviaci il tuo CV.</p>

        <h2 class="h3 mb-3 fw-normal text-black">Posizioni aperte</h2>
        <ul>
            <li>Revisiore articoli</li>
        </ul>
        <!-- Messaggio di successo -->
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <!-- Form per inviare la candidatura -->
        <form action="{{ route('submit_application') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <h1 class="h3 mb-3 fw-normal text-black">Invia la tua candidatura</h1>
                <p class="mt-2 mb-4 text-black">Inserisci i tuoi dati:</p>

                <div class="form-floating mb-3 ">
                    <input type="text" name="name" class="form-control" id="Name" placeholder="Enter Full Name" required>
                    <label for="name">Full Name</label>
                </div>

                <div class="form-floating mb-3 ">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
                    <label for="email">Email</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="file" id="cv" name="cv" class="form-control" required>
                    <label for="cv">Carica il tuo CV</label>
                </div>
            </div>
            <!-- Bottone di invio -->
            <button type="submit" class="btn btn-primary">Invia candidatura</button>
        </form>
    </section>
</x-layout>