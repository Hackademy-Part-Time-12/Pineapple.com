<x-layout>
    <div class="container pt-5">
        <div class="row">
            <h1 class="text-center">
                {{$product_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
            </h1>
        </div>
    </div>

    @if ($product_to_check)
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    @if ($product_to_check->images)
                    <div class="carousel-inner">
                        @foreach ($product_to_check->images as $image)
                        <div class="carousel-item @if($loop->first)active @endif">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="{{($image->getUrl(400,300))}}" class="img-fluid p-3 rounded" alt="...">
                            </div>
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


                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button tc-accent h1 m-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{__('ui.revisioneImmagini')}}
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row"><span class="{{$image->adult}}"></span></th>
                                            <td>{{__('ui.adulti')}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><span class="{{$image->spoof}}"></span></th>
                                            <td>{{__('ui.satira')}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><span class="{{$image->medical}}"></span></th>
                                            <td colspan="2">{{__('ui.medicina')}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row"><span class="{{$image->violence}}"></span></th>
                                            <td colspan="2">{{__('ui.violenza')}}</td>
                                        </tr>

                                        <tr>
                                            <th scope="row"><span class="{{$image->racy}}"></span></th>
                                            <td colspan="2">{{__('ui.ammiccante')}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <span><strong> Tags : </strong></span>

                    @if ($image !== null && is_array($image->labels))
                        @foreach ($image->labels as $label)
                            {{$label}}
                        @endforeach
                    @else
                        <h4>Nessun Tag da Mostrare</h4>
                    @endif
                </div>

                @endif

            </div>





            <div class="col-12 col-md-6">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="h3" scope="col">{{$product_to_check->title}}</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{__('ui.price')}}</th>
                                <td>{{$product_to_check ->price}}€</td>
                            </tr>
                            <tr>
                                <th scope="row">{{__('ui.categories')}}</th>
                                <td colspan="2">{{$product_to_check->category->name}}</td>
                            </tr>

                            <tr>
                                <th scope="row">{{__('ui.postedBy')}}</th>
                                <td colspan="2">{{$product_to_check ->user->name ?? __('ui.utenteSconosciuto') }}</td>
                            </tr>

                            <tr>
                                <th scope="row">{{__('ui.publishedOn')}}</th>
                                <td colspan="2">{{$product_to_check ->created_at->format('d/m/Y')}}</td>
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
                                            <td>{!! nl2br($product_to_check ->description) !!}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




                    <div class="row">
                        <div class="col-12 col-md-6">
                            <form action="{{route('revisor.accept_product', ['product'=>$product_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success shadow">Accetta</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-6 text-end">
                            <form action="{{route('revisor.reject_product', ['product'=>$product_to_check])}}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-danger shadow">Rifiuta</button>
                            </form>

                        </div>
                    </div>



            </div>




        </div>

        @endif


</x-layout>