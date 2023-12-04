<x-layout>


    <div class="container mt-5">
        <div class="row">
            <h3 class="col-12 text-center">Tutti gli annunci</h3>

            @forelse ($products as $product)
            <div class="col-12 col-md-6">
                <div class="my_card">
                    <div class="my_cover" style="background-image: url('{{Storage::url($product->cover)}}')">
                        <h1>{{ $product->title }}</h1>
                        <span class="my_price">{{ $product->price }} €</span>
                            <p class="my_byUser">Inserito da: {{$product->user->name ?? 'Utente Sconosciuto'}}</p>
                            <p class="my_publishedIn">Pubblicato il: {{$product->created_at->format('d/m/Y')}}</p>
                        <div class="my_card-back">
                        <a class="mx-4" href="{{route('product.show', compact('product'))}}"><button class="bn30">Visualizza</button></a>
                        <a class="mx-4" href="{{route('category.show', ['category'=>$product->category])}}"><button class="bn30">{{$product->category->name}}</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @empty

            <div class="col-12">
                <div class="alert alert-warning py-3 shadow">
                    <p class="lead">Non ci sono annunci per quessta ricerca. Prova a cambiare te stesso.</p>
                </div>
            </div>

            @endforelse

            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
</x-layout>