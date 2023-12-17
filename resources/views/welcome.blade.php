<x-layout>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>




    @if (session()->has('access.denied'))
    <div class="alert alert-danger">
        {{ session('access.denied')}}
    </div>
    @endif

    @if (session()->has('message'))
    <div class="alert alert-succes">
        {{ session('message')}}
    </div>
    @endif


    <!--     <div class="my-text-end pPhone_image text-black-pineapple">
        <div class="my-position-text">
            <h1 class="">pPhone 15 Pro</h1>
            <h3>{{__('ui.titanium.Strong.Lightweight.Pro.')}}</h3>
            <a class="" href=""><button class="bn30">{{__('ui.buy')}}</button></a>
        </div>
    </div>




    <div class="my-text-start pBookSurf_image text-black-pineapple">
        <div class="my-position-text text-white">
            <h1 class="">pBook Surf</h1>
            <h3>{{__('ui.slim.Lightweight.Strong.Versatile.')}}</h3>
            <a class="" href=""><button class="bn30">{{__('ui.buy')}}</button></a>
        </div>
    </div> -->






    <!--     <div class="container rombi_body">
        <div class="gallery">
            <img src="{{ asset('img/pPhoneCategory.jpg') }}" alt="a house on a mountain">
            <img src="{{ asset('img/pBookCategory.jpg') }}" alt="sime pink flowers">
            <img src="{{ asset('img/pBookProCategory.jpg') }}" alt="big rocks with some trees">
            <img src="{{ asset('img/pWatchCategory.jpg') }}" alt="a waterfall, a lot of tree and a great view from the sky">
            <img src="{{ asset('img/pAirCategory.jpg') }}" alt="a cool landscape">
            <img src="{{ asset('img/pTabCategory.jpg') }}" alt="inside a town between two big buildings">
            <img src="{{ asset('img/pTVCategory.png') }}" alt="a great view of the sea above the mountain">
            <img src="{{ asset('img/accessoriCategory.jpg') }}" alt="a great view of the sea above the mountain">
        </div>
    </div> -->





    <div id="carouselExampleCaptions" class="carousel slide mobile">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/pPhone_Vertical4.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-dark">
                    <a href="{{route('category.show', ['category'=>$categories[0]])}}">
                        <h5>pPhone</h5>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/pBookVertical.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-dark">
                    <a href="{{route('category.show', ['category'=>$categories[1]])}}">
                        <h5>pBook</h5>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/pTabVertical.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-dark">
                    <a href="{{route('category.show', ['category'=>$categories[2]])}}">
                        <h5>pTab</h5>
                    </a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/pWatchVertical2.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-dark">
                    <a href="{{route('category.show', ['category'=>$categories[3]])}}">
                        <h5>pWatch</h5>
                    </a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/pTVVertical.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-dark">
                    <a href="{{route('category.show', ['category'=>$categories[4]])}}">
                        <h5>pTV</h5>
                    </a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/pAirVertical.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-dark">
                    <a href="{{route('category.show', ['category'=>$categories[5]])}}">
                        <h5>pAir</h5>
                    </a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/accessoriCategoryVertical.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-md-block text-dark">
                    <a href="{{route('category.show', ['category'=>$categories[6]])}}">
                        <h5>Accessori</h5>
                    </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>









    <div class="container-fluid pc">
        <header class="c-header c-header--archive c-header--project-list">
            <div class="c-mouse-vertical-carousel js-carousel u-media-wrapper u-media-wrapper--16-9">
                <ul class="c-mouse-vertical-carousel__list js-carousel-list">
                    <li class="c-mouse-vertical-carousel__list-item js-carousel-list-item" data-item-id="0">
                        <a href="{{route('category.show', ['category'=>$categories[0]])}}">
                            <p class="c-mouse-vertical-carousel__eyebrow u-b4">
                                <span>
                                    01
                                </span> Categoria
                            </p>

                            <p class="c-mouse-vertical-carousel__title u-a5">
                                p-Phone
                            </p>
                        </a>
                    </li>

                    <li class="c-mouse-vertical-carousel__list-item js-carousel-list-item" data-item-id="1">
                        <a href="{{route('category.show', ['category'=>$categories[1]])}}">
                            <p class="c-mouse-vertical-carousel__eyebrow u-b4">
                                <span>
                                    02
                                </span> Categoria
                            </p>

                            <p class="c-mouse-vertical-carousel__title u-a5">
                                p-Book
                            </p>
                        </a>
                    </li>

                    <li class="c-mouse-vertical-carousel__list-item js-carousel-list-item" data-item-id="2">
                        <a href="{{route('category.show', ['category'=>$categories[2]])}}">
                            <p class="c-mouse-vertical-carousel__eyebrow u-b4">
                                <span>
                                    03
                                </span> Categoria
                            </p>

                            <p class="c-mouse-vertical-carousel__title u-a5">
                                p-Tab
                            </p>
                        </a>
                    </li>

                    <li class="c-mouse-vertical-carousel__list-item js-carousel-list-item" data-item-id="3">
                        <a href="{{route('category.show', ['category'=>$categories[3]])}}">
                            <p class="c-mouse-vertical-carousel__eyebrow u-b4">
                                <span>
                                    04
                                </span> Categoria
                            </p>

                            <p class="c-mouse-vertical-carousel__title u-a5">
                                p-Watch
                            </p>
                        </a>
                    </li>

                    <li class="c-mouse-vertical-carousel__list-item js-carousel-list-item" data-item-id="4">
                        <a href="{{route('category.show', ['category'=>$categories[4]])}}">
                            <p class="c-mouse-vertical-carousel__eyebrow u-b4">
                                <span>
                                    05
                                </span> Categoria
                            </p>

                            <p class="c-mouse-vertical-carousel__title u-a5">
                                p-TV
                            </p>
                        </a>
                    </li>

                    <li class="c-mouse-vertical-carousel__list-item js-carousel-list-item" data-item-id="5">
                        <a href="{{route('category.show', ['category'=>$categories[5]])}}">
                            <p class="c-mouse-vertical-carousel__eyebrow u-b4">
                                <span>
                                    06
                                </span> Categoria
                            </p>

                            <p class="c-mouse-vertical-carousel__title u-a5">
                                p-Air
                            </p>
                        </a>
                    </li>

                    <li class="c-mouse-vertical-carousel__list-item js-carousel-list-item" data-item-id="6">
                        <a href="{{route('category.show', ['category'=>$categories[6]])}}">
                            <p class="c-mouse-vertical-carousel__eyebrow u-b4">
                                <span>
                                    07
                                </span> Categoria
                            </p>

                            <p class="c-mouse-vertical-carousel__title u-a5">
                                Accessori
                            </p>
                        </a>
                    </li>
                </ul>

                <div class="c-mouse-vertical-carousel__bg-img js-carousel-bg-img" style="background-image: url('./../img/pPhone_Orizontal3.png')"></div>
                <div class="c-mouse-vertical-carousel__bg-img js-carousel-bg-img" style="background-image: url('./../img/pBookSurf_orizontal.png')"></div>
                <div class="c-mouse-vertical-carousel__bg-img js-carousel-bg-img" style="background-image: url('./../img/pTab2.png')"></div>
                <div class="c-mouse-vertical-carousel__bg-img js-carousel-bg-img" style="background-image: url('./../img/pWatch2.png')"></div>
                <div class="c-mouse-vertical-carousel__bg-img js-carousel-bg-img" style="background-image: url('./../img/pTVCategory.png')"></div>
                <div class="c-mouse-vertical-carousel__bg-img js-carousel-bg-img" style="background-image: url('./../img/pAir.png')"></div>
                <div class="c-mouse-vertical-carousel__bg-img js-carousel-bg-img" style="background-image: url('./../img/accessoriCategory.jpg')"></div>
                <div class="c-gradient-overlay"></div>
            </div>
        </header>
    </div>


    <!--     <div class="container">

        <div class="row">
            <div class="col-12 col-md-3 col-sm-6">
                <img class="img-fluid pt-5" src="{{ asset('img/pPhoneCategory.jpg') }}" alt="">
                <P class="text-center">pPhone</P>
            </div>

            <div class="col-12 col-md-3 col-sm-6">
                <img class="img-fluid pt-5" src="{{ asset('img/pBookCategory.jpg') }}" alt="">
                <P class="text-center">pBook</P>
            </div>

            <div class="col-12 col-md-3 col-sm-6">
                <img class="img-fluid pt-5" src="{{ asset('img/pBookProCategory.jpg') }}" alt="">
                <P class="text-center">pBookPro</P>
            </div>

            <div class="col-12 col-md-3 col-sm-6">
                <img class="img-fluid pt-5" src="{{ asset('img/pWatchCategory.jpg') }}" alt="">
                <P class="text-center">pWatch</P>
            </div>
            <div class="col-12 col-md-3 col-sm-6">
                <img class="img-fluid pt-5" src="{{ asset('img/pAirCategory.jpg') }}" alt="">
                <P class="text-center">pAir</P>
            </div>

            <div class="col-12 col-md-3 col-sm-6">
                <img class="img-fluid pt-5" src="{{ asset('img/pTabCategory.jpg') }}" alt="">
                <P class="text-center">pTab</P>
            </div>

            <div class="col-12 col-md-3 col-sm-6">
                <img class="img-fluid pt-5" src="{{ asset('img/pTVCategory.png') }}" alt="">
                <P class="text-center">pTV</P>
            </div>

            <div class="col-12 col-md-3 col-sm-6">
                <img class="img-fluid pt-5" src="{{ asset('img/accessoriCategory.jpg') }}" alt="">
                <P class="text-center">Accessori</P>
            </div>

        </div>
    </div> -->




    <!--     <div class="pBook_image text-end text-black-pineapple">
        <div class="p-5">
            <h1 class="pe-5">pBook Pro</h1>
            <h3>Titanio. Forte. Leggero. Pro.</h3>
            <a class="pe-5 me-4" href=""><button class="bn632-hover bn23">Acquista</button></a>
        </div>
    </div> -->






    <div class="container">
        <div class="row">
            <h2 class="col-12 text-center my-5">{{__('ui.allAnnouncements')}}</h2>
            <div class="row">

                @foreach ($products as $product)

                @php
                $backgroundImage = $product->images()->get()->isEmpty() ? 'https://picsum.photos/200' : $product->images()->first()->getUrl(400,300);
                @endphp

                <div class="card m-2 p-0 shadow" style="width: 18rem;">
                    <img src="{{$backgroundImage}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">{{Str::limit($product->description), 200}}</p>
                        <a href="{{route('product.show', $product)}}" class="btn btn-primary">{{__('ui.visualizzaProdotto')}}</a>
                    </div>
                </div>

                @endforeach
            </div>


        </div>
    </div>





    <section class="dark" style="margin-top: 100px;">
        <div class="container py-4">
            <h1 class="h1 text-center text-secondary" id="pageHeaderTitle">{{__('ui.nuoviProdottiPineapple')}}</h1>

            <article class="postcard dark blue">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="./../img/pPhone_Orizontal.png" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title blue"><a href="#">pPhone 13</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2023-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i> 25 novembre 2023
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{__('ui.presentazionePPhone')}}</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i> Smartphone</li>
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i> pPhone</li>
                        <li class="tag__item play blue">
                            <a href="{{route('category.show', ['category'=>$categories[0]])}}"><i class="fas fa-play mr-2"></i> {{__('ui.goToUsedSection')}}</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard dark red">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="./../img/pBook_orizontal.png" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title red"><a href="#">pBook Ultra</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2023-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i> 25 maggio 2023
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{__('ui.presentazionePBook')}}</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i> Notebook</li>
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i> pBook</li>
                        <li class="tag__item play red">
                            <a href="{{route('category.show', ['category'=>$categories[1]])}}"><i class="fas fa-play mr-2"></i> {{__('ui.goToUsedSection')}}</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard dark green">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="./../img/pTab.png" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title green"><a href="#">pTab SlimXL</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2023-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i> 25 maggio 2023
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{__('ui.presentazionePTab')}}</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i> Tablet</li>
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i> pTab</li>
                        <li class="tag__item play green">
                            <a href="{{route('category.show', ['category'=>$categories[2]])}}"><i class="fas fa-play mr-2"></i> {{__('ui.goToUsedSection')}}</a>
                        </li>
                    </ul>
                </div>
            </article>
            <article class="postcard dark yellow">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="./../img/pWatch.png" alt="Image Title" />
                </a>
                <div class="postcard__text">
                    <h1 class="postcard__title yellow"><a href="#">pWatch Series 3</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2023-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i> 25 maggio 2023
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{__('ui.presentazionePWatch')}}</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i> SmartWatch</li>
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i> pWatch</li>
                        <li class="tag__item play yellow">
                            <a href="{{route('category.show', ['category'=>$categories[3]])}}"><i class="fas fa-play mr-2"></i> {{__('ui.goToUsedSection')}}</a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
    </section>

    <section class="">
        <div class="container py-2">
            <div class="h1 text-center text-dark" id="pageHeaderTitle">{{__('ui.recensioni')}}</div>

            <article class="postcard light blue">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="./../img/Linda.png" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title blue"><a href="#">Linda</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2023-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i> 25 maggio 2023
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{__('ui.recensioneLinda')}}</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{__('ui.recensioni')}}</li>
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{__('ui.tagUtenti')}}</li>
                    </ul>
                </div>
            </article>
            <article class="postcard light red">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="./../img/Pablo.png" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title red"><a href="#">Pablo</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2023-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i> 25 maggio 2023
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{__('ui.recensionePablo')}}</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{__('ui.recensioni')}}</li>
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{__('ui.tagUtenti')}}</li>
                    </ul>
                </div>
            </article>
            <article class="postcard light green">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="./../img/Arnold.png" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title green"><a href="#">Arnold</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2023-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i> 25 maggio 2023
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{__('ui.recensioneArnold')}}</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{__('ui.recensioni')}}</li>
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{__('ui.tagUtenti')}}</li>
                    </ul>
                </div>
            </article>
            <article class="postcard light yellow">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="./../img/Guohua.png" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title yellow"><a href="#">Guohua</a></h1>
                    <div class="postcard__subtitle small">
                        <time datetime="2023-05-25 12:00:00">
                            <i class="fas fa-calendar-alt mr-2"></i> 25 maggio 2023
                        </time>
                    </div>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">{{__('ui.recensioneGuohua')}}</div>
                    <ul class="postcard__tagbox">
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{__('ui.recensioni')}}</li>
                        <li class="tag__item"><i class="fas fa-tag mr-2"></i>{{__('ui.tagUtenti')}}</li>
                    </ul>
                </div>
            </article>
        </div>
    </section>


</x-layout>