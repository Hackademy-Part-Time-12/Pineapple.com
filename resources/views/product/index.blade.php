<x-layout>


    <div class="container pt-5">
        <div class="row">

            @foreach ($products as $product)
            <div class="col-12 col-md-6 col-lg-4 pt-5 text-center">

                <div class="imageDimension card mb-3">
                    <img src="{{ $product->cover }}" class="imageDimension img-fluid card-img-top" alt="{{ $product->title }}">
                    <div class="card-body">
                        <a href="{{route('product.show', compact('product'))}}">
                            <h5 class="card-title">{{ $product->title }}</h5>
                        </a>
                        <div>
                            <p>{{$product->description}}</p>
                            <p>{{$product->price}}</p>

                            <a href="{{route('product.show', compact('product'))}}"><p>Visualizza Prodotto</p></a>
                            <a href="{{route('category.show', ['category'=>$product->category])}}"><p>Categoria: {{$product->category->name}}</p></a>
                            <p>Inserito da: {{$product->user->name ?? 'Utente Sconosciuto'}}</p>
                            <p>Pubblicato il: {{$product->created_at->format('d/m/Y')}}</p>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach

            {{$products->links()}}

        </div>
    </div>



</x-layout>