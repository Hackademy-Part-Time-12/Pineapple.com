<x-layout>



    <div class="container my-5">
        <div class="row">
            <h2 class="font-color-dark font-titoli">{{$product->title}}</h2>
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
                    <p><span class="fw-bold">Description</span> <br><br> {!! nl2br($product->description) !!}</p>
                    <h5><span class="fw-bold">Prezzo:</span> {{$product->price}}€</h5>

                    <h5><span class="fw-bold">Categorie:</span> {{$product->category->name}}</h4>

                    <p><small class="font-color-dark ">Inserito da: {{$product->user->name ?? 'Utente Sconosciuto'}}</small></p>
                    <p><small class="font-color-dark ">Inserito il:{{$product->created_at->format('d/m/Y')}}</small></p>
                </div>
            </div>
        </div>
        <div class="row p-5">
            <div class="col-12 text-center">
                <a class="underline-none" href="{{route('product.index')}}"><button class="bn30 css-button-sliding-to-top--grey">Torna alla lista Annunci</button></a>
            </div>
        </div>
    </div>

</x-layout>