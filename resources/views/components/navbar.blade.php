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
                    <a class="nav-link" href="{{route('product.index')}}">{{__('ui.announcements')}}</a>
                </li>




                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.categories')}}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item" href="{{route('category.show', compact('category'))}}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" aria-current="page" href="{{route('product.create')}}">{{__('ui.postAnAd')}}</a>
                </li>

                <form action="{{route('products.search')}}" method="GET" class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="{{__('ui.search')}}" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">{{__('ui.search')}}</button>
                </form>
            </ul>







            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.language')}}
                    </a>
                    <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <x-_locale lang="it" nation="it" />
                                        </div>
                                        <div class="col-6 pt-2 px-0">
                                            <p>{{__('ui.itLanguage')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <x-_locale lang="en" nation="gb" />
                                        </div>
                                        <div class="col-6 pt-2 px-0">
                                            <p>{{__('ui.enLanguage')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <x-_locale lang="es" nation="es" />
                                        </div>
                                        <div class="col-6 pt-2 px-0">
                                            <p>{{__('ui.esLanguage')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </ul>
                </li>

                @auth

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.welcome')}} {{Auth::user()->name}}
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
                    <a class="nav-link" aria-current="page" href="{{route('revisor.index')}}">{{__('ui.auditor')}}
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{App\Models\Product::toBeRevisionedCount()}}
                            <span class="visually-hidden">Unread Message</span>

                        </span>
                    </a>
                </li>
                @endif


                @else
                <li class="nav-item dropdown">
                    <a class="nav-link" aria-current="page" href="{{route('login')}}">{{__('ui.login')}}</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" aria-current="page" href="{{route('register')}}">{{__('ui.register')}}</a>
                </li>
                @endauth
            </ul>

        </div>
    </div>
</nav>