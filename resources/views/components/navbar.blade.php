<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('article.index')}}">Logo</a>
        <button class="navbar-toggler me-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarsExample01" style="">
            <ul class="navbar-nav me-auto mb-2">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('article.index')}}">Homepage</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Elenco Categorie</a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{ route('articles.filterByCategory', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                @auth
                {{-- auth --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person"></i>
                            {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            @if (Auth::user()->is_revisor)
                                <li><a class="dropdown-item" href="{{route('revisor.index')}}">Area riservata</a></li>
                            @endif
                            <li><a class="dropdown-item" href="{{route('articles.create')}}">Crea articolo</a></li>
                            <li class="dropdown-item">
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person"></i>
                        {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('articles.create')}}">Crea articolo</a></li>
                        <li class="dropdown-item">
                            <form action="{{ route('workwithus') }}" method="GET">
                                <button type="submit" class="btn btn-outline-danger">Lavora con noi</button>
                            </form>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                    {{-- guest --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person"></i>
                            Utente
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                        </ul>
                    </li>
                @endauth
            </ul>
            {{-- <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form> --}}
            <form class="d-flex ms-auto" role="search" action="{{ route('search.articles') }}" method="GET">
                <div class="input-group">
                  <input type="search" name="query" class="form-control" placeholder="Search" aria - label="search">
                  <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2">
                    Search
                  </button>
                </div>
              </form>
              
        </div>
    </div>
</nav>