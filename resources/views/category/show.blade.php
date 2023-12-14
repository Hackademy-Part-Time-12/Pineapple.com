<x-layout>

    <div class="container mt-5">
        <div class="row">
            <h1 class="col-12 text-center">{{__('ui.title')}}</h1>


            @forelse ($category->products as $product)

            @php
                $backgroundImage = $product->images()->get()->isEmpty() ? 'https://picsum.photos/200' : Storage::url($product->images()->first()->path);
            @endphp

            <div class="col-12 col-md-6">
                <div class="my_card">
                    <div class="my_cover" style="background-image: url('{{ $backgroundImage }}');">
                        <h1>{{ $product->title }}</h1>
                        <span class="my_price">{{ $product->price }} €</span>
                            <p class="my_byUser">{{__('ui.postedBy')}} {{$product->user->name ?? 'Utente Sconosciuto'}}</p>
                            <p class="my_publishedIn">{{__('ui.publishedOn')}} {{$product->created_at->format('d/m/Y')}}</p>
                        <div class="my_card-back">
                        <a class="mx-4" href="{{route('product.show', compact('product'))}}"><button class="bn30">{{__('ui.display')}}</button></a>
                        </div>
                    </div>
                </div>
            </div>



            @empty

            <div class="col-12">
            <p class="h1">{{__('ui.thereAreNoAdsForThisCategory')}}</p>
            <p class="h2">{{__('ui.postAnAd')}}<a href="{{route('product.create')}}">{{__('ui.newAd')}}</a></p>
            </div>


            @endforelse






        </div>
    </div>


</x-layout>