<x-layout>




    @if (session()->has('access.denied'))
    <div class="alert alert-danger">
        {{ session('access.denied')}}
    </div>
    @endif

    @if (session()->has('message'))
    <div class="alert alert-succes">
        {{ session('message')}}
    </div>
    @endif


    <div class="my-text-end pPhone_image text-black-pineapple">
        <div class="my-position-text">
            <h1 class="">pPhone 15 Pro</h1>
            <h3>Titanio. Forte. Leggero. Pro.</h3>
            <a class="" href=""><button class="bn30">Acquista</button></a>
        </div>
    </div>




    <div class="my-text-start pBookSurf_image text-black-pineapple">
        <div class="my-position-text text-white">
            <h1 class="">pBook Surf</h1>
            <h3>Sottile. Leggero. Prestante. Versatile.</h3>
            <a class="" href=""><button class="bn30">Acquista</button></a>
        </div>
    </div>

    <!--     <div class="pBook_image text-end text-black-pineapple">
        <div class="p-5">
            <h1 class="pe-5">pBook Pro</h1>
            <h3>Titanio. Forte. Leggero. Pro.</h3>
            <a class="pe-5 me-4" href=""><button class="bn632-hover bn23">Acquista</button></a>
        </div>
    </div> -->







    <div class="container mt-5">
        <div class="row">
            <h3 class="col-12 text-center">Ultimi annunci</h3>

            @foreach ($products as $product)
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
            @endforeach

        </div>
    </div>




    {{-- <div class="col-12 col-md-4 pt-5">
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
    </div> --}}


</x-layout>