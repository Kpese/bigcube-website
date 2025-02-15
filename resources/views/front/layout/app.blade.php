<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Big Cubes</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="BigCubes, gourmet restaurant, exquisite cuisine, culinary excellence, sophisticated dining, top-notch service, elegant ambiance, gourmet dishes, events" name="keywords">
    <meta content="Where exquisite cuisine meets exceptional service. we offers a sophisticated ambiance, meticulously crafted dishes, and a commitment to culinary excellence. Join us for an unforgettable dining experience." name="description">

    <!-- Favicon -->
    <link href="{{ asset('front/img/logo.jpg')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('front/lib/animate/animate.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/owlcarousel/assets/owl.carousel.min.css ') }}" rel="stylesheet">
    <link href="{{ asset('front/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css ') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">
@livewireStyles
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('front.layout.header')
        @include('sweetalert::alert')


        {{-- content --}}
        @yield('content')



    </div>

@include('front.layout.footer')
