<x-layout>


    <div class="container pt-5">
        <div class="row">

            @foreach ($categories as $category)
            <div class="col-12 col-md-6 col-lg-4 pt-5 text-center">

                <div class="imageDimension card mb-3">
                    <img src="{{ $category->cover }}" class="imageDimension img-fluid card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                    </div>
                </div>

            </div>
            @endforeach


        </div>
    </div>



</x-layout>