<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand link-logo" href="{{route('welcome')}}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('product.index')}}">Annunci</a>
                </li>




                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{route('category.show', compact('category'))}}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" aria-current="page" href="{{route('product.create')}}">Inserisci annuncio</a>
                </li>

                <form action="{{route('products.search')}}" method="GET" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>




















            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lingua
                    </a>
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                            <li>
                                <x-_locale lang="it" nation="it" />
                            </li>
                            <li>
                                <x-_locale lang="en" nation="gb" />
                            </li>
                            <li>
                                <x-_locale lang="es" nation="es" />
                            </li>
                        </ul>
                    </ul>
                </li>

                @auth

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Benvenuto {{Auth::user()->name}}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li> <a class="dropdown-item" aria-current="page" href="{{route('logout')}}" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            <form action="{{route('logout')}}" method="POST" id="form-logout">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>


                @if (Auth::user()->is_revisor)

                <li class="nav-item dropdown">
                    <a class="nav-link" aria-current="page" href="{{route('revisor.index')}}">Revisore
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{App\Models\Product::toBeRevisionedCount()}}
                            <span class="visually-hidden">Unread Message</span>

                        </span>
                    </a>
                </li>
                @endif


                @else
                <li class="nav-item dropdown">
                    <a class="nav-link" aria-current="page" href="{{route('login')}}">Accedi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" aria-current="page" href="{{route('register')}}">Registrati</a>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>