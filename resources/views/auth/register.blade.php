<x-layout>


    <div class="container my-5">
        <div class="row">
            <h3 class="text-center">{{__('ui.register')}}</h3>
        </div>
    </div>


    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('register')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">{{__('ui.fullName')}}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                        @error('name')
                        <div class="fst-italic text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{old('email')}}">
                        @error('email')
                        <div class="fst-italic text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                        <div class="fst-italic text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{__('ui.confirmPassword')}}</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">{{__('ui.register')}}</button>
                </form>
            </div>

            <div class="col-12 col-md-6">
                <img class="img-fluid" src="./img/pWatch.png" alt="">
            </div>

        </div>
    </div>

</x-layout>