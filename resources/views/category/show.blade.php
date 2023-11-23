<x-layout>

    <div class="container mt-5">
        <div class="row">
            <h1 class="col-12 text-center">TITOLO</h1>


            @forelse ($category->products as $product)
            <div class="col-12 col-md-4 pt-5">
                <div class="container">
                    <div class="row">
                        <div class="card mb-3 image-card background-card font-color-white" style="max-width: 540px;">
                            <img src="{{Storage::url($product->cover)}}" class="scale-image card-img-top" alt="{{ $product->title }}">

                            <div class="card-overlay container">
                                <div class="row position-absolute top-0">
                                    <h2 class="card__title h1 fw-bold card-title text-white">{{ $product->title }}</h2>
                                    <p>Inserito da: {{$product->user->name ?? 'Utente Sconosciuto'}}</p>
                                    <p>Pubblicato il: {{$product->created_at->format('d/m/Y')}}</p>
                                    <div class="justify-content-between">
                                        <a class="underline-none" href="{{route('product.show', compact('product'))}}"><button class="bn30 css-button-sliding-to-top--grey--dark">Visualizza Prodotto</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty

            <div class="col-12">
            <p class="h1">Non sono presenti annunci per questa categoria</p>
            <p class="h2">Pubblicane uno: <a href="{{route('product.create')}}">Nuovo annuncio</a></p>
            </div>


            @endforelse






        </div>
    </div>


</x-layout>