<x-layout>


    <div class="container mt-5">
        <div class="row">
            <h3 class="col-12 text-center">{{__('ui.allTheAdvertisements')}}</h3>

            @forelse ($products as $product)

            @php
            $backgroundImage = $product->images()->get()->isEmpty() ? 'https://picsum.photos/200' : $product->images()->first()->getUrl(400,300);
            @endphp

            @if($product->is_accepted === 1)

            <!--             <div class="col-12 col-md-6">
                <div class="my_card">
                    <div class="my_cover" style="background-image: url('{{ $backgroundImage }}');">
                        <h1>{{ $product->title }}</h1>
                        <span class="my_price">{{ $product->price }} €</span>
                        <p class="my_byUser">{{__('ui.postedBy')}} {{$product->user->name ?? __('ui.utenteSconosciuto') }}</p>
                        <p class="my_publishedIn">{{__('ui.publishedOn')}} {{$product->created_at->format('d/m/Y')}}</p>
                        <div class="my_card-back">
                            <a class="mx-4" href="{{route('product.show', compact('product'))}}"><button class="bn30">{{__('ui.display')}}</button></a>
                            <a class="mx-4" href="{{route('category.show', ['category'=>$product->category])}}"><button class="bn30">{{$product->category->name}}</button></a>
                        </div>
                    </div>
                </div>
            </div> -->


<!--             <div class="col-12 col-md-3">
                <div class="new_card">
                    <div class="card_product">
                        <img src="{{$backgroundImage}}" class="card__image">
                        <div class="card__overlay">
                            <div class="overlay__text">
                                <h3>{{ $product->title }}</h3>
                                <p>{{Str::limit($product->description), 200}}</p>
                                <a href="{{route('product.show', $product)}}" class="button">Visualizza Annuncio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->




            <div class="card m-2 p-0 shadow" style="width: 18rem;">
                <img src="{{$backgroundImage}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->title }}</h5>
                    <p class="card-text">{{Str::limit($product->description), 200}}</p>
                    <a href="{{route('product.show', $product)}}" class="btn btn-primary">{{__('ui.visualizzaProdotto')}}</a>
                </div>
            </div>



            @endif
            @empty

            <div class="col-12">
                <div class="alert alert-warning py-3 shadow">
                    <p class="lead">Non ci sono annunci per questa ricerca. Prova a cambiare te stesso.</p>
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
        </div>
    </div>
</x-layout>