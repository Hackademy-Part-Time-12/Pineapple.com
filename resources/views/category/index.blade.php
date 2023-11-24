<x-layout>


    <div class="container pt-5">
        <div class="row">

            @foreach ($categories as $category)
            <div class="col-12 col-md-6 col-lg-4 pt-5 text-center">

                <div class="imageDimension card mb-3">
                    <img src="{{ $category->cover }}" class="imageDimension img-fluid card-img-top" alt="{{ $category->name }}">
                    <div class="card-body">
                        <a href="{{route('category.show', compact('category'))}}"><h5 class="card-title">{{ $category->name }}</h5></a>
                    </div>
                </div>

            </div>
            @endforeach


        </div>
    </div>



</x-layout>