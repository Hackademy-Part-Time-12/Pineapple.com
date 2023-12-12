<x-layout>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 pt-5 text-center">
                <h1>
                    {{$product_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>

    @if ($product_to_check)
    <div class="container my-5">
        <div class="row">
            <h2 class="font-color-dark font-titoli">{{$product_to_check->title}}</h2>
        </div>
    </div>
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
                            <img src="{{Storage::url($image->path)}}" class="img-fluid p-3 rounded" alt="...">
                        </div>
                        @endforeach
                    </div>
                    @else

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
            @endif
            <div class="col-12 col-md-6">
            <div class="card-body">
                <h5 class="tc-accent">revisione immagini</h5>
                    <p>Adulti: <span></span></p>
                    <p>Satira: <span></span></p>
                    <p>Medicina: <span></span></p>
                    <p>Violenza: <span></span></p>
                    <p>Contenuto Ammiccante: <span></span></p>
            </div>
            </div>
            <div class="col-12">
                <div class="col-12 font-color-dark ">
                    <p><span class="fw-bold">Description</span> <br><br> {!! nl2br($product_to_check ->description) !!}</p>
                    <h5><span class="fw-bold">Prezzo:</span> {{$product_to_check ->price}}€</h5>

                    <h5><span class="fw-bold">Categorie:</span> {{$product_to_check->category->name}}</h4>

                        <p><small class="font-color-dark ">Inserito da: {{$product_to_check ->user->name ?? 'Utente Sconosciuto'}}</small></p>
                        <p><small class="font-color-dark ">Inserito il:{{$product_to_check ->created_at->format('d/m/Y')}}</small></p>
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

    @endif


</x-layout>