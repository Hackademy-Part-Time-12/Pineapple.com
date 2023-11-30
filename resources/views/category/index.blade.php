<x-layout>


    <div class="container pt-5">
        <div class="row">

            @foreach ($categories as $category)
            <div class="col-12 col-md-6">
                <div class="my_card">
                    <div class="my_cover" style="background-image: url('{{ $category->cover }}')">
                        <h1>{{ $category->name }}</h1>
                        <div class="my_card-back">
                        <a class="mx-4" href="{{route('category.show', compact('category'))}}"><button class="bn30">{{ $category->name }}</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>



</x-layout>