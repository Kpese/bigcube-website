<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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

</head>

<body  style="background-color: #d2c9ff;">

    <div class="site-section mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="66" height="66" fill="currentColor" class="bi bi-check-circle-fill text-danger" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </svg>
            <h2 class="display-3 text-black">Thank you!</h2>
            <p class="lead mb-5">You order was placed successfuly completed.</p>
            <p><a href="{{ route('home') }}" class="btn btn-md height-auto px-4 py-3 btn-primary">Back to store</a></p>
            {{-- <p><a href="https://paystack.com/pay/bigcubes" class="btn btn-md height-auto px-4 py-3 btn-primary">Pay Now</a></p> --}}
          </div>
        </div>
      </div>
    </div>

    @include('front.layout.footer')
