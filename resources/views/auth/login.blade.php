<x-layout>

    <!-- validazione del login -->
    <div class="col-12  mt-3 d-flex justify-content-center">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

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
                    <label class="form-check-label text-white" for="flexCheckDefault">Remember me</label>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                <p class="mt-3 mb-3 text-black">© 2024 by Rebels</p>
            </div>
        </form>
    </div>
</x-layout>