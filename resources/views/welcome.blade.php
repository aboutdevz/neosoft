<x-guest-layout>
@if ($errors->any())
    <div class="w-100 absolute bg-red-500 text-white py-2 text-center z-20">
        <div class="font-medium ">
            'Whoops! Something went wrong.
        </div>
        <ul class="mt-3 list-disc list-inside text-sm ">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <main class="container-fluid h-screen">
        <div class="row items-center">
            <div class="col-7 p-0">
                <div class="carousel slide carousel-fade relative" data-bs-ride="carousel">
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="/storage/travel1.jpg" class="d-block w-100 h-screen object-cover" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/storage/travel2.jpeg" class="d-block w-100 h-screen object-cover" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/storage/travel3.jpg" class="d-block w-100 h-screen object-cover" alt="...">
                        </div>
                    </div>

                    <div class="absolute  text-center place-items-center top-0 z-10 left-0 bg-black opacity-70 w-100 h-100">
    
                    </div>

                </div>
            </div>
            <div class="col p-5">
                <x-application-logo class="block h-32 w-auto fill-current text-gray-600 mx-auto" />
                <h1 class="text-center font-bold text-5xl mb-12">Login</h1>
                <form action="/login" method="POST">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>

                    <hr>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <div class="d-grid mb-2">
                        <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Login</button>
                    </div>

                    <a  class="d-block text-center mt-2 small" href="/register">Don't Have an account? Sign Up</a>
                </form>
            </div>
        </div>
    </main>
</x-guest-layout>