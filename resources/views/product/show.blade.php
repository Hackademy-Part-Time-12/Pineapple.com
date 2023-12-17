<x-layout>



    <div class="container my-5">
        <!--         <div class="row">
            <h2 class="font-color-dark font-titoli">{{$product->title}}</h2>
        </div>
    </div>
    <div class="container my-5 vh-100">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($product->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{($image->getUrl(400,300))}}" class="img-fluid p-3 rounded" alt=" ... ">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="col-12 font-color-dark ">
                    <p><span class="fw-bold">{{__('ui.description')}}</span> <br><br> {!! nl2br($product->description) !!}</p>
                    <h5><span class="fw-bold">{{__('ui.price')}}</span> {{$product->price}}€</h5>

                    <h5><span class="fw-bold">{{__('ui.categories')}}</span> {{$product->category->name}}</h4>

                        <p><small class="font-color-dark ">{{__('ui.postedBy')}} {{$product->user->name ?? __('ui.utenteSconosciuto') }}</small></p>
                        <p><small class="font-color-dark ">{{__('ui.publishedOn')}} {{$product->created_at->format('d/m/Y')}}</small></p>
                </div>
            </div>
        </div> -->


        <div class="container row">

            <div class="col-12 col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($product->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <img src="{{($image->getUrl(400,300))}}" class="img-fluid p-3 rounded" alt=" ... ">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="h3" scope="col">{{$product->title}}</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">{{__('ui.price')}}</th>
                            <td>{{$product->price}}€</td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('ui.categories')}}</th>
                            <td colspan="2">{{$product->category->name}}</td>
                        </tr>

                        <tr>
                            <th scope="row">{{__('ui.postedBy')}}</th>
                            <td colspan="2">{{$product->user->name ?? __('ui.utenteSconosciuto') }}</td>
                        </tr>

                        <tr>
                            <th scope="row">{{__('ui.publishedOn')}}</th>
                            <td colspan="2">{{$product->created_at->format('d/m/Y')}}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="accordion" id="accordionExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button tc-accent h1 m-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                {{__('ui.description')}}
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample2">
                            <div class="accordion">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>{!! nl2br($product->description) !!}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>












        <div class="container row mt-5">
            <div class="col-12 col-md-6">
                <h3>Circuiti di pagamento :</h3>
            </div>

            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card__info">
                        <div class="card__logo">PlasticIsShiny</div>
                        <div class="card__chip">
                            <svg class="card__chip-lines" role="img" width="20px" height="20px" viewBox="0 0 100 100" aria-label="Chip">
                                <g opacity="0.8">
                                    <polyline points="0,50 35,50" fill="none" stroke="#000" stroke-width="2" />
                                    <polyline points="0,20 20,20 35,35" fill="none" stroke="#000" stroke-width="2" />
                                    <polyline points="50,0 50,35" fill="none" stroke="#000" stroke-width="2" />
                                    <polyline points="65,35 80,20 100,20" fill="none" stroke="#000" stroke-width="2" />
                                    <polyline points="100,50 65,50" fill="none" stroke="#000" stroke-width="2" />
                                    <polyline points="35,35 65,35 65,65 35,65 35,35" fill="none" stroke="#000" stroke-width="2" />
                                    <polyline points="0,80 20,80 35,65" fill="none" stroke="#000" stroke-width="2" />
                                    <polyline points="50,100 50,65" fill="none" stroke="#000" stroke-width="2" />
                                    <polyline points="65,65 80,80 100,80" fill="none" stroke="#000" stroke-width="2" />
                                </g>
                            </svg>
                            <div class="card__chip-texture"></div>
                        </div>
                        <div class="card__type">debit</div>
                        <div class="card__number">
                            <span class="card__digit-group">0000</span>
                            <span class="card__digit-group">0021</span>
                            <span class="card__digit-group">4748</span>
                            <span class="card__digit-group">3647</span>
                        </div>
                        <div class="card__valid-thru" aria-label="Valid thru">Valid<br>thru</div>
                        <div class="card__exp-date"><time datetime="2038-01">01/38</time></div>
                        <div class="card__name" aria-label="Dee Stroyer">Dee Stroyer</div>
                        <div class="card__vendor" role="img" aria-labelledby="card-vendor">
                            <span id="card-vendor" class="card__vendor-sr">Mastercard</span>
                        </div>
                    </div>
                    <div class="card__texture"></div>
                </div>
            </div>
        </div>


        <div class="row p-5">
            <div class="col-12 text-center">
                <a class="underline-none" href="{{route('product.index')}}"><button class="bn30 css-button-sliding-to-top--grey">{{__('ui.tornaListaAnnunci')}}</button></a>
            </div>
        </div>
    </div>

</x-layout>