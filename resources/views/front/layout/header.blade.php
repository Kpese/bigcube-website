        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ url('/') }}" class="navbar-brand p-0">
                  <img src="{{ asset('front/img/logo.jpg') }}" width="100%" height="100px" style="border-radius: 100%" alt="">
                </a>
                    @if (Route::has('login'))
                    @auth
                    <p class="mt-3 text-primary">Welcome {{ Auth::user()->name }}</p>
                       <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                        @endauth

                        @endif


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ url('/') }}" class="nav-item nav-link">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#menu" class="nav-item nav-link">Menu</a>
                        <a href="#testimony" class="nav-item nav-link">testimonial</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                        <a href="{{ route('checkout') }}" class="nav-item nav-link">Checkout</a>
                    </div>
                    <a href="#booking" class="btn btn-primary py-2 px-4">Book A Table</a>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">BigCubes: Vibrant Atmosphere, Delectable Menu, Fresh Ingredients, Impeccable Service, Perfect for Any Occasion.</p>
                            @if (!Auth::user())
                            <a href="{{ route('login') }}" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Login</a>
                            <a href="{{ route('register') }}" class="btn btn-light py-sm-3 px-sm-5 me-3 animated slideInLeft">Register</a>

                            @endif
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid shadow" src="{{ asset('front/img/rounded2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0 sticky-top">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                <!-- <img src="{{ asset('front/img/logo.png')}}" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0 pe-4">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="service.html" class="nav-item nav-link">Service</a>
                    <a href="menu.html" class="nav-item nav-link">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="booking.html" class="dropdown-item">Booking</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
            </div>
        </nav> --}}

        <!-- Navbar & Hero End -->
