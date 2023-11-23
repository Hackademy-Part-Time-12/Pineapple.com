<x-layout>


    <!--     <div class="container pt-5">
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
    </div> -->


    <div class="container mt-5">
        <div class="row">
            <h3 class="col-12 text-center">Tutti gli annunci</h3>

            @foreach ($products as $product)
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
                                        <a class="underline-none" href="{{route('category.show', ['category'=>$product->category])}}"><button class="bn30 css-button-sliding-to-top--grey--dark">{{$product->category->name}}</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
</x-layout>