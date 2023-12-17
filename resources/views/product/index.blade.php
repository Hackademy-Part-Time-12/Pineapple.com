<x-layout>


    <div class="container mt-5">
        <div class="row">
            <h3 class="col-12 text-center">{{__('ui.allTheAdvertisements')}}</h3>

            @forelse ($products as $product)

            @php
            $backgroundImage = $product->images()->get()->isEmpty() ? 'https://picsum.photos/200' : Storage::url($product->images()->first()->path);
            @endphp

            @if($product->is_accepted === 1)

            <div class="col-12 col-md-6">
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