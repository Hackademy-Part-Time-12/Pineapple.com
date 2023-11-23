<x-layout>


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
            <div class="col-12 col-md-4">
                <div class="container">
                    <div class="row">
                        <div class="card mb-3 image-card background-card font-color-white" style="max-width: 540px;">
                            <img src="{{Storage::url($product->cover)}}" class="scale-image card-img-top" alt="{{ $product->title }}">
<!--                             <div class="card-body text-center pt-4">
                                <h5 class="card-title">{{ $product->title }}</h5>
                            </div> -->
                            <div class="card-overlay">
                                <h2 class="card__title h1 fw-bold card-title position-absolute top-0 start-0 p-5 text-white">{{ $product->title }}</h2>
                                {{-- <a class="underline-none" href="{{route('product.show', $product)}}"><button class="css-button-sliding-to-top--grey--dark">Scopri di più</button></a>
                                <a class="underline-none" href="{{route($product->category->name)}}"><button class="css-button-sliding-to-top--grey--dark">Scopri di più</button></a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach








        </div>
    </div>



</x-layout>