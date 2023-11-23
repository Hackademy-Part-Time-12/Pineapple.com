<x-layout>

    <div class="container my-5">
        <div class="row">
            <h2 class="font-color-dark font-titoli">{{$product->title}}</h2>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <img class="img-fluid" src="{{Storage::url($product->cover)}}" alt="">
            </div>
            <div class="col-12 col-md-6">
                <div class="col-12 font-color-dark ">
                    <p>Description: {{$product->description}}</p>
                    <h5>Prezzo: {{$product->price}}€</h5>

                    <h4>Categorie : {{$product->category->name}}</h4>

                    <p>Inserito da: {{$product->user->name ?? 'Utente Sconosciuto'}} </p>
                    <p><small class="font-color-dark ">Inserito il:{{$product->created_at->format('d/m/Y')}}</small></p>
                </div>
            </div>
        </div>
        <div class="row p-5">
            <div class="col-12 text-center">
                <a class="underline-none" href="{{route('product.index')}}"><button class="bn30 css-button-sliding-to-top--grey">Torna alla lista Annunci</button></a>
            </div>
        </div>
    </div>

</x-layout>