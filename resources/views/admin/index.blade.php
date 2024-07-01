
@extends('admin.layout.app')

@section('content')

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-12">
            {{-- @include('sweetalert::alert') --}}
          <div class="row">
            <!-- Sales Card -->
            <div class="col-lg-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">TOTAL USERS</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                          </svg>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $user }}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->
            <div class="col-lg-4">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">TOTAL PRODUCTS</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $product }}</h6>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-lg-4">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">TOTAL ORDER</span></h5>

                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-cart"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $order }}</h6>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
          </div>
        </div>
        <!-- End Left side columns -->
      </div>
    </section>




      @endsection
