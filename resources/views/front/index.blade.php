@extends('front.layout.app')

@section('content')

@include('front.service')


@include('front.about')


@include('front.menu')


<!-- Testimonial Start -->
<div id="testimony" class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
            <h1 class="mb-5">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>BigCubes has been a game-changer for our events. Their shawarma and sandwiches are always a hit, and the quality is consistently top-notch. The variety they offer, from healthy flavored drinks to delectable pastries, ensures there's something for everyone. Our guests always leave happy and satisfied.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('front/img/ernest.jpg')}}" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Ernest</h5>
                        <small>Software Developer</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>I can't recommend BigCubes enough! Their burgers and jollof rice are absolutely delicious, and their yogurt and ice cream are the perfect treats to finish off a meal. The team's professionalism and attention to detail make them our go-to for catering our office events. They're simply the best!</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('front/img/kate.jpg')}}" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Urica Kate</h5>
                        <small>Storyteller | Ghotstwriter | Spoken Poet</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>Whether it's a casual get-together or a large event, BigCubes always delivers. Their shawarma is the best I've had, and their range of snacks and pastries is incredible. The team is professional, friendly, and always goes the extra mile to ensure everything is perfect. A fantastic choice for catering services!</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('front/img/sam.png')}}" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Sam</h5>
                        <small>Backend Developer</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>BigCubes has a knack for delivering exceptional food and outstanding service. Their snacks and pastries are always fresh and tasty, and the healthy flavored drinks are a refreshing change. We've hired them for multiple events, and they never disappoint. Highly recommended for anyone looking for quality and variety.</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('front/img/test1.jpg')}}" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">Mr. Ben</h5>
                        <small>Banker</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@include('front.contact')

@endsection
