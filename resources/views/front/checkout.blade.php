<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Big Cube - Checkout</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        body {
            margin-top: 20px;
            background-color: #f1f3f7;
        }

        .card {
            margin-bottom: 24px;
            -webkit-box-shadow: 0 2px 3px #e4e8f0;
            box-shadow: 0 2px 3px #e4e8f0;
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #eff0f2;
            border-radius: 1rem;
        }

        .activity-checkout {
            list-style: none
        }

        .activity-checkout .checkout-icon {
            position: absolute;
            top: -4px;
            left: -24px
        }

        .activity-checkout .checkout-item {
            position: relative;
            padding-bottom: 24px;
            padding-left: 35px;
            border-left: 2px solid #f5f6f8
        }

        .activity-checkout .checkout-item:first-child {
            border-color: #3b76e1
        }

        .activity-checkout .checkout-item:first-child:after {
            background-color: #3b76e1
        }

        .activity-checkout .checkout-item:last-child {
            border-color: transparent
        }

        .activity-checkout .checkout-item.crypto-activity {
            margin-left: 50px
        }

        .activity-checkout .checkout-item .crypto-date {
            position: absolute;
            top: 3px;
            left: -65px
        }



        .avatar-xs {
            height: 1rem;
            width: 1rem
        }

        .avatar-sm {
            height: 2rem;
            width: 2rem
        }

        .avatar {
            height: 3rem;
            width: 3rem
        }

        .avatar-md {
            height: 4rem;
            width: 4rem
        }

        .avatar-lg {
            height: 5rem;
            width: 5rem
        }

        .avatar-xl {
            height: 6rem;
            width: 6rem
        }

        .avatar-title {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: #3b76e1;
            color: #fff;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            font-weight: 500;
            height: 100%;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%
        }

        .avatar-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            padding-left: 8px
        }

        .avatar-group .avatar-group-item {
            margin-left: -8px;
            border: 2px solid #fff;
            border-radius: 50%;
            -webkit-transition: all .2s;
            transition: all .2s
        }

        .avatar-group .avatar-group-item:hover {
            position: relative;
            -webkit-transform: translateY(-2px);
            transform: translateY(-2px)
        }

        .card-radio {
            background-color: #fff;
            border: 2px solid #eff0f2;
            border-radius: .75rem;
            padding: .5rem;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: block
        }

        .card-radio:hover {
            cursor: pointer
        }

        .card-radio-label {
            display: block
        }

        .edit-btn {
            width: 35px;
            height: 35px;
            line-height: 40px;
            text-align: center;
            position: absolute;
            right: 25px;
            margin-top: -50px
        }

        .card-radio-input {
            display: none
        }

        .card-radio-input:checked+.card-radio {
            border-color: #3b76e1 !important
        }


        .font-size-16 {
            font-size: 16px !important;
        }

        .text-truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        a {
            text-decoration: none !important;
        }


        .form-control {
            display: block;
            width: 100%;
            padding: 0.47rem 0.75rem;
            font-size: .875rem;
            font-weight: 400;
            line-height: 1.5;
            color: #545965;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #e2e5e8;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.75rem;
            -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        }

        .edit-btn {
            width: 35px;
            height: 35px;
            line-height: 40px;
            text-align: center;
            position: absolute;
            right: 25px;
            margin-top: -50px;
        }

        .ribbon {
            position: absolute;
            right: -26px;
            top: 20px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            color: #fff;
            font-size: 13px;
            font-weight: 500;
            padding: 1px 22px;
            font-size: 13px;
            font-weight: 500
        }

    </style>
</head>

<body style="background-color: #d2c9ff;">
    @include('sweetalert::alert')
    <div class="container">

        <div class="row">
            <div class="col-xl-8">
                    <form action="{{route('checkout')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card">
                        <div class="card-body">
                            <h1 class="fw-bold mb-0 text-black">Shopping Checkout</h1>
                            <ol class="activity-checkout mb-0 px-4 mt-3">
                                <li class="checkout-item">
                                    <div class="avatar checkout-icon p-1">
                                        <div class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bxs-receipt text-white font-size-20"></i>
                                        </div>
                                    </div>
                                    <div class="feed-item-list">
                                        <div>
                                            <h5 class="font-size-16 mb-5">Billing Info</h5>
                                            <div class="mb-3">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-name">Name</label>
                                                                <input type="text" name="name" class="form-control" placeholder="Enter name">
                                                                @error('name')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-email-address">Email Address</label>
                                                                <input type="email" class="form-control" name="email" placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-phone">Phone</label>
                                                                <input type="text" class="form-control" name="phone" placeholder="Enter Phone no.">
                                                                @error('phone')
                                                                <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">Address</label>
                                                        <textarea class="form-control" name="address" rows="3" placeholder="Enter full address"></textarea>
                                                        @error('address')
                                                        <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="checkout-item">
                                    <div class="avatar checkout-icon p-1">
                                        <div class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bxs-wallet-alt text-white font-size-20"></i>
                                        </div>
                                    </div>
                                    <div class="feed-item-list">
                                        <div>
                                            <h5 class="font-size-16 mb-1">Payment Info</h5>
                                            <p class="text-muted text-truncate mb-4">Big Cube payment details</p>
                                        </div>
                                        <div>
                                            <h5 class="font-size-14 mb-3">Payment method : Bank Transfer</h5>
                                            <div class="row">
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                          <h5 class="card-title pb-2">Account Name: <span class="text-warning"> Gladness Chinyere Eigbe</span></h5>
                                                          <h5 class="card-title pb-2">Bank Account: <span class="text-warning"> PalmPay</span></h5>
                                                          <h5 class="card-title">Account Number: <span class="text-warning"> 9070072619 </span></h5>
                                                        </div>
                                                      </div>
                                                </div>
                                                <div class="col-lg-12 col-sm-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                         <input type="file" name="receipt" class="pb-3">
                                                         <p class="text-danger text-sm">**Please ensure to upload your receipt after payment. Thanks**</p>
                                                        </div>
                                                      </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col">
                            <a href="{{ url('/') }}" class="btn btn-link text-muted">
                                <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
                        </div> <!-- end col -->
                        <div class="col">
                            <div class="text-end mt-2 mt-sm-0">
                                <button type="submit" class="btn btn-success"><i class="mdi mdi-cart-outline me-1"></i> Procced </button>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </form>
                </div>
            <div class="col-xl-4">
                <div class="card checkout-order-summary">
                    <div class="card-body">
                        <div class="p-3 bg-light mb-3">
                            <h5 class="font-size-16 mb-0">Order Summary</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-centered mb-0 table-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0" style="width: 110px;" scope="col">Product</th>
                                        <th class="border-top-0" scope="col">Product Desc</th>
                                        <th class="border-top-0" scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $total = 0
                                    @endphp
                                     @if (Auth::check())
                                    @foreach ($cart as $cart)
                                    <tr>
                                        <th scope="row">
                                            @if (!empty($cart->product_image))
                                            <img src="{{ asset('images/products/'.$cart->product_image) }}" style="width: 40px; height:40px" alt="product-img" title="product-img" class="avatar-lg rounded">
                                            @endif
                                        </th>
                                        <td>
                                            <h5 class="font-size-16 text-truncate text-dark">{{ $cart->product_name }}</h5>
                                            <p class="text-muted mb-0 mt-1"> qty: {{ $cart->quantity }}</p>
                                        </td>
                                        <td>₦{{$cart->price}}
                                            <form action="{{ route('delete.cart', $cart->id) }}" class="d-flex" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" onclick=" return confirm('Are you sure you want to delete cart?')" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                                                  </svg></button>
                                                </form>
                                        </td>
                                    </tr>
                                    @php
                                    $total = $total + $cart->price
                                    @endphp
                                    @endforeach

                                    @else

                                    @foreach ($cart as $item)
                                    <tr>
                                        <th scope="row">
                                            @if (!empty($item['product_image']))
                                            <img src="{{ asset('images/products/'.$item['product_image']) }}" style="width: 40px; height:40px" alt="product-img" title="product-img" class="avatar-lg rounded">
                                            @endif
                                        </th>
                                        <td>
                                            <h5 class="font-size-16 text-truncate text-dark">{{ $item['product_name'] }}</h5>
                                            <p class="text-muted mb-0 mt-1"> qty: {{ $item['quantity'] }}</p>
                                        </td>
                                        <td>₦{{ $item['price'] }}
                                            <form action="{{ route('delete.cart', $item['product_id']) }}" class="d-flex" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" onclick=" return confirm('Are you sure you want to delete cart?')" class="btn btn-danger btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                                                  </svg></button>
                                                </form>
                                        </td>
                                    </tr>
                                    @php
                                    $total = $total + $item['price']
                                    @endphp

                                    @endforeach

                            @endif
                                    <tr class="bg-light mt-3">
                                        <td colspan="2">
                                            <h5 class="font-size-14 m-0">Total :</h5>
                                        </td>
                                        <td>
                                            ₦{{$total}}
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
    @include('front.layout.footer')
