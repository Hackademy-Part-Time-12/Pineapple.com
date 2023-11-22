<x-layout>

    <div class="container my-5">
        <div class="row">
            <h2>TITLE</h2>
        </div>
    </div>


    <div class="container my-5">
        <div class="row">
            <div class="col-12 com-md-6">
                <img src="" alt="">
            </div>
            <div class="col-12 com-md-6">
                <div>Description: {{$product->description}}</div>
                <div>Price: {{$product->price}}</div>
                <div>Category: {{$product->category->name}}</div>
                <div>Inserito da: {{$product->user->name ?? 'Utente Sconosciuto'}}</div>
            </div>
        </div>
    </div>



    <div class="col-12 text-center">
        <a class="underline-none" href="#"><button class="css-button-sliding-to-top--grey">Torna all'indice</button></a>
    </div>


</x-layout>