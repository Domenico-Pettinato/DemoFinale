<nav class="navbar bg-body-tertiary navbar-expand-lg sticky-top" style="height: 9vh">
    <div class="container-fluid ">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown"> <!-- Aggiunto justify-content-center -->
            <ul class="navbar-nav">
                <!-- Aggiunto il form di ricerca con larghezza controllata -->
                <form class="d-flex" role="search" action="{{ route('article.search') }}" method="GET">
                    <div class="input-group w-auto"> <!-- Aggiunta la classe w-auto -->
                        <input type="search" name="query" class="form-control custom-search-input me-2 mb-0" aria-label="search" placeholder={{__('ui.Search') }} >
                        <button type="submit" class="btn btn-outline-primary" id="basic-addon2">
                            <svg width="20" height="20" class="DocSearch-Search-Icon" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                </form>
                <!-- Resto della navbar -->
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('article.index')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('shop')}}">{{__('ui.shop')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.category') }} <!-- Traduzione di "Categorie" -->
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                        <li>
                            <a class="dropdown-item" href="{{ route('articles.filterByCategory', ['category' => $category->id]) }}">
                                {{ __('categories.' . $category->name) }} <!-- Traduzione del nome della categoria -->
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    
                </li>

                @auth
                @if (!Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('articles.create')}}">{{__('ui.Createarticle')}}</a>
                </li>
                @endif
                @endauth
                
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ms-auto" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu dropdownCustom">
                        <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                        <li><a class="dropdown-item" href="{{route('register')}}">{{__('ui.Signup')}}</a></li>
                        <hr>
                        <div class="d-flex align-items-center">
                            <x-_locale lang="it" />
                            <p class="mt-3">Italiano</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <x-_locale lang="en" />
                            <p class="mt-3">English</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <x-_locale lang="es" />
                            <p class="mt-3">Español</p>
                        </div>
                    </ul>
                </li>
                @endguest

                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle ms-auto" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu dropdownCustom">
                        <li>
                            <p class="text-center">{{__('ui.ciao')}} {{Auth::user()->name}}</p>
                        </li>
                        <hr>
                        @if (Auth::user()->is_revisor)
                        <li><a class="dropdown-item text-center" href="{{route('revisor.index')}}">{{__('ui.Privatearea')}}</a></li>
                        @endif
                        
                        @if (!Auth::user()->is_revisor)
                        <!-- <li><a class="dropdown-item text-center" href="{{route('articles.create')}}">{{__('ui.Createarticle')}}</a></li> -->
                        <li>
                            <a class="dropdown-item text-center" href="{{route('personalArea')}}">{{__('ui.Privatearea2')}}</a></li>
                        <li>
                             <form action="{{ route('workwithus') }}" method="GET">
                                <button type="submit" class="btn btn-outline-success btnDropdownCustom">{{__('ui.Workwithus')}}</button>
                            </form>
                        </li>
                        @endif
                        <li>

                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btnDropdownCustom">Logout</button>
                            </form>
                        </li>
                        <hr>
                        <div class="d-flex align-items-center">
                            <x-_locale lang="it" />
                            <p class="mt-3">Italiano</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <x-_locale lang="en" />
                            <p class="mt-3">English</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <x-_locale lang="es" />
                            <p class="mt-3">Español</p>
                        </div>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>