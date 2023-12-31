<x-layout>


    <div class="container my-5">


        <div class="row">



            <div class="col-12 col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">

                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>


                        @php $slideIndex = 1; @endphp
                        @foreach ($product->images as $image)
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $slideIndex }}" aria-label="Slide {{ $slideIndex + 1 }}"></button>
                        @php $slideIndex++; @endphp
                        @endforeach


                    </div>
                    <div class="carousel-inner">
                        @foreach ($product->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                            <div class="d-flex align-items-center justify-content-center">
                                <img src="{{($image->getUrl(400,300))}}" class="img-fluid p-3 rounded" alt="...">
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>





            <div class="col-12 col-md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="background-color: rgba(0, 0, 0, 0);" class="h3" scope="col">{{$product->title}}</th>
                            <th style="background-color: rgba(0, 0, 0, 0);" scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th style="background-color: rgba(0, 0, 0, 0);" scope="row">{{__('ui.price')}}</th>
                            <td style="background-color: rgba(0, 0, 0, 0);">{{$product->price}}€</td>
                        </tr>
                        <tr>
                            <th style="background-color: rgba(0, 0, 0, 0);" scope="row">{{__('ui.categories')}}</th>
                            <td style="background-color: rgba(0, 0, 0, 0);" colspan="2">{{$product->category->name}}</td>
                        </tr>

                        <tr>
                            <th style="background-color: rgba(0, 0, 0, 0);" scope="row">{{__('ui.postedBy')}}</th>
                            <td style="background-color: rgba(0, 0, 0, 0);" colspan="2">{{$product->user->name ?? __('ui.utenteSconosciuto') }}</td>
                        </tr>

                        <tr>
                            <th style="background-color: rgba(0, 0, 0, 0);" scope="row">{{__('ui.publishedOn')}}</th>
                            <td style="background-color: rgba(0, 0, 0, 0);" colspan="2">{{$product->created_at->format('d/m/Y')}}</td>
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












<!--         <div class="container row mt-5">
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
 -->

        <div class="row p-5">
            <div class="col-12 text-center">
                <a class="underline-none" href="{{route('product.index')}}"><button class="bn30 css-button-sliding-to-top--grey">{{__('ui.tornaListaAnnunci')}}</button></a>
            </div>
        </div>
    </div>

</x-layout>