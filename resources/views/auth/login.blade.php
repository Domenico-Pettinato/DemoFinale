<x-layout>
    <div class=" d-flex justify-content-center">
        <img src="{{ asset ('images\logo.jpg') }}" alt="Logo" width="100" height="100" class="rounded-circle mt-2 mb-4">
    </div>

    <!-- validazione del login -->
    @if ($errors->any())
    <div class=" alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach
    </div>
    @endif
    
    <div class="col-12 mt-3 d-flex justify-content-center vh-100">
        <form method="POST" action="{{route('login')}}" class="form">
            @csrf
            <div class="container">
                <h1 class="h3 mb-3 fw-normal text-black">Sign In</h1>

                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label text-black" for="flexCheckDefault">Remember me</label>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                <p class="mt-3 mb-3 text-black"></p>
            </div>

            <!-- Messaggio di successo -->
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
        </form>
    </div>
    {{-- 
    <div class="d-flex justify-content-center mt-3">
        <a href="{{ route('login.facebook') }}" class="btn btn-primary mx-2">
            <i class="fab fa-facebook"></i> Login con Facebook
        </a>
        <a href="{{ route('login.instagram') }}" class="btn btn-danger mx-2">
            <i class="fab fa-instagram"></i> Login con Instagram
        </a>
    </div>
    --}}
</x-layout>