<div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <form wire:submit.prevent="store">
                @csrf
                @if(session('productCreated'))

                <div class="alert alert-success">
                    {{ session('productCreated') }}
                </div>


                @endif

                <div class="mb-3">
                    <label for="title" class="form-label">{{__('ui.adTitle')}}</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" wire:model="title">
                    @error('title')
                    <div class="fst-italic text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">{{__('ui.description')}}</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="5" wire:model="description"></textarea>
                    @error('description')
                    <div class="fst-italic text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input wire:model="temporary_images" type="file" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img" name="images">
                    @error('temporary_images.*')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                    @enderror

                    @if (!empty($images))
                    <div class="row">
                        <div class="col-12">
                            <p>Photo preview:</p>
                            <div class="row border border-4 border-info rounded shadow py-4">
                                @foreach ($images as $key => $image)
                                <div class="col my-3">
                                    <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}});    background-size: cover;
"></div>
                                    <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})">{{__('ui.delete')}}</button>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">{{__('ui.price')}}</label>
                    <input type="number" min="1" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price" wire:model="price">
                    @error('price')
                    <div class="fst-italic text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="mb-3">
                    <label for="category">{{__('ui.category')}}</label>
                    <select wire:model.defer="category" name="category" id="category" class="form-control">
                        <option value="">{{__('ui.scegliCategoria')}}</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                        @error('category')
                        <div class="fst-italic text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">{{__('ui.addAnAd')}}</button>
            </form>
        </div>
    </div>




</div>