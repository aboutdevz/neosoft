<x-guest-layout>
    <main class="container-fluid h-screen">
        <div class="row items-center">
            <div class="col-7 p-0">
                <div class="carousel slide relative" data-bs-ride="carousel">
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <img src="https://media.suara.com/pictures/970x544/2020/01/14/62937-ilustrasi-traveling.jpg" class="d-block w-100 h-screen object-cover" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://asset.kompas.com/crops/90XbQ00RbbvvcKG3mQl2KJHsFNs=/0x0:1280x853/750x500/data/photo/2020/05/09/5eb6b04a2c063.jpeg" class="d-block w-100 h-screen object-cover" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://ecs7.tokopedia.net/blog-tokopedia-com/uploads/2020/01/traveling.jpg" class="d-block w-100 h-screen object-cover" alt="...">
                        </div>
                    </div>

                    <div class="absolute top-0 left-0 bg-black opacity-40 w-100 h-100"></div>

                </div>
            </div>
            <div class="col p-5">
                <h1 class="text-center font-bold text-5xl mb-12">Register</h1>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{old('name')}}" required autofocus>
                        <label for="name">Username</label>
                    </div>
                   
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>

                    <hr>

                    <div class="form-floating has-validation mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                   

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                        <label for="password_confirmation">Confirm Password</label>
                    </div>

                    <div class="d-grid mb-2">
                        <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
                    </div>

                    <a class="d-block text-center mt-2 small" href="{{route('login')}}">Have an account? Sign In</a>
                </form>
                
            </div>
        </div>
    </main>
</x-guest-layout>