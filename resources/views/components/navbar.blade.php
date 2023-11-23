<div class="nav-container">
    <nav>
        <ul class="mobile-nav">
            <li>
                <div class="menu-icon-container">
                    <div class="menu-icon">
                        <span class="line-1"></span>
                        <span class="line-2"></span>
                    </div>
                </div>
            </li>

            <li>
                <a href="#" class="link-logo"></a>
            </li>

            <li>
                <a href="" class="link-bag"></a>
            </li>
        </ul>

        <ul class="desktop-nav">
            <li>
                <a href="{{route('welcome')}}" class="link-logo"></a>
            </li>
            @foreach ($categories as $category)

            <li>
                <a href="{{route('category.show', compact('category'))}}">{{ $category->name }}</a>
            </li>

            @endforeach

            <li>
                <a href="{{route('category.index')}}">Categorie</a>
            </li>

            <li>
                <a href="{{route('product.index')}}">Annunci</a>
            </li>

            <li>
                <a href="#">Supporto</a>
            </li>

            @auth
            <li>
                <a href="#">Benvenuto {{Auth::user()->name}}</a>
            </li>
            <li>
                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                <form action="{{route('logout')}}" method="POST" id="form-logout">
                    @csrf
                </form>
            </li>
            <li>
                <a href="{{route('product.create')}}">Inserisci annuncio</a>
            </li>

            @else
            <li>
                <a href="{{route('login')}}">Accedi</a>
            </li>
            <li>
                <a href="{{route('register')}}">Registrati</a>
            </li>
            @endauth

            <li>
                <a href="#" class="link-search"></a>
            </li>
            <li>
                <a href="#" class="link-language"></a>
            </li>
            <li>
                <a href="#" class="link-language1"></a>
            </li>
            <li>
                <a href="#" class="link-language2"></a>
            </li>
        </ul>
    </nav>



    <div class="search-container hide">
        <div class="link-search"></div>
        <div class="search-bar">
            <form action="CERCA">
                <input type="text" placeholder="Ricerca in Pineapple.com">
            </form>
        </div>
        <div class="link-close"></div>

        <div class="quick-links">
            <h2>Link diretti</h2>
            <ul>
                <li>
                    <a href="#">Inserisci un annuncio</a>
                </li>
                <li>
                    <a href="#">Modifica un annuncio</a>
                </li>
                <li>
                    <a href="#">Elimina un annuncio</a>
                </li>
                <li>
                    <a href="#">Revisiona un annuncio</a>
                </li>
                <li>
                    <a href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>


    <div class="mobile-search-container">
        <div class="link-search"></div>
        <div class="search-bar">
            <form action="">
                <input type="text" placeholder="Ricerca in Pineapple.com">
            </form>
        </div>
        <span class="cancel-btn">Cancel</span>

        <div class="quick-links">
            <h2>Link diretti</h2>
            <ul>
                <li>
                    <a href="#">Inserisci un annuncio</a>
                </li>
                <li>
                    <a href="#">Modifica un annuncio</a>
                </li>
                <li>
                    <a href="#">Elimina un annuncio</a>
                </li>
                <li>
                    <a href="#">Revisiona un annuncio</a>
                </li>

            </ul>
        </div>
    </div>


</div>


<div class="overlay"></div>