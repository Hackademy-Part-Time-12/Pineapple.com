<x-layout>

    <div class="container mt-5">
        <div class="row">
            <h1 class="col-12 text-center">TITOLO</h1>


            @forelse ($category->products as $product)
            <div class="col-12 col-md-6">
                <div class="my_card">
                    <div class="my_cover" style="background-image: url('{{Storage::url($product->cover)}}')">
                        <h1>{{ $product->title }}</h1>
                        <span class="my_price">{{ $product->price }} €</span>
                            <p class="my_byUser">Inserito da: {{$product->user->name ?? 'Utente Sconosciuto'}}</p>
                            <p class="my_publishedIn">Pubblicato il: {{$product->created_at->format('d/m/Y')}}</p>
                        <div class="my_card-back">
                        <a class="mx-4" href="{{route('product.show', compact('product'))}}"><button class="bn30">Visualizza</button></a>
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