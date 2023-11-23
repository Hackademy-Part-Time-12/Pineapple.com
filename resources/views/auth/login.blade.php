<x-layout>

    <div class="container my-5">
        <div class="row">
            <h3 class="text-center">Accedi</h3>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="{{route('login')}}" method="POST">
                    @csrf

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

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                        <label class="form-check-label" for="remember">Ricordami</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>

            <div class="col-12 col-md-6">
                <img class="img-fluid" src="./img/pWatch_Orizontal.png" alt="">
            </div>
        </div>
    </div>

</x-layout>